<h1>Trim your URI</h1><?php$form->prepare();$form->setAttribute('action', $this->url('zhorty-trim'));$form->setAttribute('method', 'post');?><?php echo $this->form()->openTag($form) ?>    <dl class="form_trim">        <dt><?php echo $this->formLabel($form->get('orig_url')) ?></dt>        <dd><?php echo $this->formInput($form->get('orig_url')) ?></dd>        <?php echo $this->formElementErrors($form->get('orig_url'), array('class' => 'alert-error')) ?>                <dt><?php echo $this->formLabel($form->get('trim_path')) ?></dt>        <dd><?php echo $this->formInput($form->get('trim_path')) ?></dd>        <?php echo $this->formElementErrors($form->get('trim_path'), array('class' => 'alert-error')) ?>        <dd><?php echo $this->formButton($form->get('submit')) ?></dd>    </dl><?php echo $this->form()->closeTag() ?>