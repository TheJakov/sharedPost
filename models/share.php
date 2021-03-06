<?php
error_reporting(E_ALL & ~E_NOTICE);

class ShareModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM shares ORDER BY create_date DESC');                         
        $rows = $this->resultSet();

        //for displaying username to shared post
        $freshRows = [];
        foreach($rows as $row){
            $this->query('SELECT name FROM users WHERE id = '.$row['user_id']);
            $username = $this->singleRecord();
            $row['username'] = $username['name'];
            array_push($freshRows, $row);
        }
        return $freshRows;
    }

    public function Add(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if($post['submit']){

            if($post['title'] == '' || $post['body'] == '' || $post['link'] == ''){
                Messages::setMessage('You need to fill in all fields to make a new shared post. ', 'error');
                return;
            }

            $this->query('INSERT INTO shares (title, body, link, user_id) VALUES (:title, :body, :link, :user_id)');
            $this->bind(':title',  $post['title']);
            $this->bind(':body',  $post['body']);
            $this->bind(':link',  $post['link']);
            $this->bind(':user_id', $_SESSION['user_data']['id']);
            $this->execute();
            if($this->lastInsertId()){
                header('Location: '.ROOT_URL.'shares');
            }
        }
        return;
    }
}

?>