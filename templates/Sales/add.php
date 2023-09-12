
<div class="container">
    <div class="row">
        <div class="card white">
            <div class="card-content">
                <div class="row">
                    <div class="col s12">
                        <h2 class="center-align">Venda</h2>
                        <a href="<?= $this->Url->build(['controller' => 'Sales', 'action' => 'index']) ?>" class="waves-effect indigo darken-4 waves-light btn"><i class="material-icons left">arrow_back</i>Voltar</a>
                        <hr>
                    </div>      
                    <?= $this->Form->create($sale, ['type' => 'file', 'class' => 'col s12']) ?>  
                        <div class="input-field col s12 l12">
                            <?= $this->Form->select('user_id', $users, [
                                'empty' => 'Selecione', // Texto da opção vazia
                                'class' => 'validate input-form',
                            ]) ?>
                            <?= $this->Form->label('user_id', 'Vendedor'); ?>
                        </div>

                        <div class="input-field col s12 l12">
                            <?= $this->Form->select('fruta_id', $frutas, [
                                'empty' => 'Selecione', // Texto da opção vazia
                                'class' => 'validate input-form',
                            ]) ?>
                            <?= $this->Form->label('fruta_id', 'Frutas'); ?>
                        </div>

                        <div class="input-field col s12">
                            <?= $this->Form->control('qtd_sold', [
                                'label' => 'Quatidade',
                                'class' => 'validate input-form',
                                'type' => 'number',
                            ]); ?>
                        </div>

                        <div class="input-field col s12 l12">
                            <?= $this->Form->select('discount', [
                                'empty' => 'não aplica',
                                '15' => '15%', 
                                '20' => '20%',
                                '25' => '25%',
                            ], [
                                'class' => 'validate input-form',
                            ]); ?>
                            <?= $this->Form->label('discount', 'Desconto'); ?>
                        </div>

                        <div class="input-field col s12">
                            <?= $this->Form->control('value_sold', [
                                'label' => 'Preço Total',
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