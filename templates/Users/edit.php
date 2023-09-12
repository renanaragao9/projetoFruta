<div class="container">
    <div class="row">
        <div class="card white">
            <div class="card-content">
                <div class="row">
                    <div class="col s12">
                        <h2 class="center-align">Editar Usuário: </h2>
                        <h2 class="center-align"><?php echo $user->name ?></h2>
                        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>" class="waves-effect indigo darken-4 waves-light btn"><i class="material-icons left">arrow_back</i>Voltar</a>
                        <hr>
                    </div>
                    
                    <?= $this->Form->create($user, ['type' => 'file', 'class' => 'col s12']) ?>      
                        <div class="input-field col s12">
                            <?= $this->Form->control('name', [
                                'label' => 'Nome', 
                                'class' => 'validate input-form',
                                ]) 
                            ?>
                        </div>
                        
                        <div class="input-field col s12 l12">
                            <?= $this->Form->select('profile', [
                                '1' => 'administrador', 
                                '0' => 'Vendedor',
                            ], [
                                'class' => 'validate input-form',
                            ]); ?>
                            <?= $this->Form->label('profile', 'Perfil'); ?>
                        </div>

                        <div class="input-field col s12">
                            <?= $this->Form->control('email', [
                                'label' => 'Email', 
                                'class' => 'validate input-form'
                                ]); 
                            ?>
                        </div>

                        <div class="col s12 left-align">
                            <?= $this->Form->button('Salvar', ['class' => 'btn']) ?>
                        </div>
                    
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>