<?php

require_once 'BaseModel.php';

class UserModel extends BaseModel
{

    public function findUserById($id)
    {
        $sql = 'SELECT * FROM users WHERE id = ' . $id;
        $user = $this->select($sql);

        return $user;
    }

    public function findUser($keyword)
    {
        $sql = 'SELECT * FROM users WHERE user_name LIKE %' . $keyword . '%' . ' OR user_email LIKE %' . $keyword . '%';
        $user = $this->select($sql);

        return $user;
    }

    /**
     * Authentication user
     * @param $userName
     * @param $password
     * @return array
     */
    public function auth($userName, $password)
    {
        $md5Password = md5($password);
        $sql = 'SELECT * FROM users WHERE name = "' . $userName . '" AND password = "' . $md5Password . '"';

        $user = $this->select($sql);
        return $user;
    }

    /**
     * Delete user by id
     * @param $id
     * @return mixed
     */
    public function deleteUserById($id)
    {
        $sql = 'DELETE FROM users WHERE id = ' . $id;
        return $this->delete($sql);
    }

    /**
     * Delete post by id
     * @param $id
     * @return mixed
     */
    public function deletePostByUserId($userId, $token)
    {
        $sql = "SELECT post_id FROM post p JOIN users u ON p.user_id = u.user_id WHERE p.user_id = $userId AND u.token = '$token'";

        // Thực hiện truy vấn và kiểm tra kết quả
        $result = $this->select($sql);

        if ($result) {
            foreach ($result as $post) {
                $postId = $post['post_id'];

                // Tiếp theo, xóa bài viết dựa trên post_id
                $this->deletePostById($postId);
            }
        }
    }

    public function deletePostById($id)
    {
        $sql = 'DELETE FROM post WHERE post_id = ' . $id;
        return $this->delete($sql);
    }

    /**
     * Update user
     * @param $input
     * @return mixed
     */
    public function updateUser($input)
    {
        $sql = 'UPDATE users SET 
                 name = "' . mysqli_real_escape_string(self::$_connection, $input['name']) . '", 
                 password="' . md5($input['password']) . '"
                WHERE id = ' . $input['id'];

        $user = $this->update($sql);

        return $user;
    }

    /**
     * Insert user
     * @param $input
     * @return mixed
     */
    public function insertUser($input)
    {
        $sql = "INSERT INTO `app_web1`.`users` (`name`, `password`) VALUES (" .
            "'" . $input['name'] . "', '" . md5($input['password']) . "')";

        $user = $this->insert($sql);

        return $user;
    }

    /**
     * Search users
     * @param array $params
     * @return array
     */
    //tim kiem thay doi prepare cho pram
    public function getUsers($params = [])
    {
        //Keyword
        if (!empty($params['keyword'])) {
            $sql = 'SELECT * FROM users WHERE name LIKE "%' . $params['keyword'] . '%"';

            //Keep this line to use Sql Injection
            //Don't change
            //Example keyword: abcef%";TRUNCATE banks;##
            $users = self::$_connection->prepare($sql);

            //Get data
            $users = $this->query($sql);
        } else {
            // sql reject
            $sql = 'SELECT * FROM users';
            //csrf
            // $sql = 'SELECT * FROM post';
            $users = $this->select($sql);
        }

        return $users;
    }
}
