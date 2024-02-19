<?php

namespace app\controllers;

use app\models\Comment;

class CommentController
{


    public function list_comments()
    {
        $comments = new Comment();
        $comments = $comments->all();

        var_dump($comments);
    }

    public function show_comment($id)
    {
        $comment = new Comment();
        $comment = $comment->find($id);

        var_dump($comment);
    }

    public function delete($id)
    {
        $comment = new Comment();
        $comment = $comment->delete($id);

        var_dump($comment);
    }

    public function create_form()
    {
        echo "
        <form action='' method='post'>
            <label for='title'>Nom</label>
            <input type='text' name='title' id='title'>
            <input type='submit' value='Ajouter'>
        </form>
        ";
    }

    public function create()
    {
        $comment = new Comment();
        $comment->create(['title' => $_POST['title']]);
    }

    public function update_form($id){
        $comment = new Comment();
        $comment = $comment->find($id);
        echo "
        <form action='./' method='post'>
            <input type='hidden' name='id' value='$id'>
            <label for='title'>Nom</label>
            <input type='text' name='title' id='title' value='" . $comment['com_title'] . "'>
            <input type='submit' value='Ajouter'>
        </form>
        ";
    }

    public function update(){
        $comment = new Comment();
        $comment = $comment->find($_POST['id']);
        var_dump($comment);
        $comment->update(['com_title' => $_POST['title']]);
    }


}