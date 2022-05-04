<?php
class DefaultController extends Controller {
    public function actionIndex() {
        //$this->output('It works!');
        $post = new Payment_Post;
        $post->run(
            array(
                'account' => yii::app()->lanbilling->getClient()->account->login
            ),
            yii::app()->params['inplat']['url']
        );
    }
}
?>
