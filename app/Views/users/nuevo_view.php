<?php echo view('templates/header');?>
<?php echo form_open('/user/create');?>
<div class="form-group">
<?php echo form_label('Nombre de Usuario : ','txtUsername')?>
<?php echo form_input(
    ['id'=>'txtUsername',
    'name'=>'username',
    'value'=>set_value('username'),
    'placeholder'=>'Nombre de Usuario',
    'class'=>'form-control'
    ]
);?>
<?php echo form_label('Contraseña : ','txtPassword')?>
<?php echo form_password(
    ['id'=>'txtPassword',
    'name'=>'password',
    'value'=>set_value('password'),
    'placeholder'=>'Ingrese contraseña',
    'class'=>'form-control'
    ]
);?>
<?php echo form_label('Correo Electronico : ','txtEmail')?>
<?php echo form_input(
    ['id'=>'txtEmaoil',
    'name'=>'email',
    'value'=>set_value('email'),
    'placeholder'=>'Ingrese Email',
    'class'=>'form-control'
    ]
);?>

<?php echo form_submit(
    ['value'=>'Guardar',
    'class'=>'btn btn-primary'

    ]
)?>


</div>
<?php echo form_close();?>
<?php echo view('templates/footer');?>