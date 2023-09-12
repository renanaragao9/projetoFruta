<div class="container">
    <div class="row">
        <div class="card white">
            <div class="card-content">
                <div class="row">
                    <div class="col s12">
                        <h2 class="center-align">Adicionar Fruta</h2>
                        <a href="<?= $this->Url->build(['controller' => 'Frutas', 'action' => 'index']) ?>" class="waves-effect indigo darken-4 waves-light btn"><i class="material-icons left">arrow_back</i>Voltar</a>
                        <hr>
                    </div>
                    
                    <?= $this->Form->create($fruta, ['type' => 'file', 'class' => 'col s12']) ?>      
                        <div class="input-field col s12">
                            <?= $this->Form->control('name', [
                                'label' => 'Nome', 
                                'class' => 'validate input-form',
                                ]) 
                            ?>
                        </div>

                        <div class="input-field col s12">
                            <?= $this->Form->control('classification', [
                                'label' => 'Classificaçao', 
                                'class' => 'validate input-form'
                                ]); 
                            ?>
                        </div>
                        
                        <div class="input-field col s12 l12">
                            <?= $this->Form->select('fresh', [
                                '1' => 'Sim', 
                                '0' => 'Nao',
                            ], [
                                'class' => 'validate input-form',
                            ]); ?>
                            <?= $this->Form->label('fresh', 'Frescor'); ?>
                        </div>
                         
                        <div class="input-field col s12">
                            <?= $this->Form->control('qtd', [
                                'label' => 'Quantidade',
                                'class' => 'validate input-form',
                                'type' => 'number'
                            ]); ?>
                        </div>

                        <div class="input-field col s12">
                            <?= $this->Form->control('price', [
                                'label' => 'Preço',
                                'class' => 'validate input-form',
                                'type' => 'number', 
                                'step' => '0.01' 
                            ]); ?>
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
