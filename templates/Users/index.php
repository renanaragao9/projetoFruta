<?php $this->assign('title', 'Lista de Usuários');  ?>

<div class="card white">
    <div class="card-content">
        <div class="col s12">
            <h3 class="center">Relação de usuarios</h3>
            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'add']) ?>" class="waves-effect indigo darken-4 waves-light btn"><i class="material-icons left">add</i>Novo</a>
        </div>
        <input type="text" id="search" onkeyup="filterTable()" placeholder="Pesquisar...">
        <div id="total-records" class="total-records"></div>
            <table class="striped highlight centered responsive-table">
                <thead>
                    <tr>
                        <th id="table-th"><?php echo $this->Paginator->sort('id', 'ID ↑↓', ['escape' => false]); ?></th>
                        <th id="table-th"><?php echo $this->Paginator->sort('name', 'Nome ↑↓'); ?></th>
                        <th id="table-th"><?php echo $this->Paginator->sort('email',' E-mail ↑↓'); ?></th>
                        <th id="table-th"><?php echo $this->Paginator->sort('profile', 'Perfil ↑↓'); ?></th>
                        <th id="table-th"><a href="#">Ações</a></th>
                    </tr>
                </thead>

                <tbody id="table-body">
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td id="table-td" ><?php echo $user->id; ?></td>
                            <td id="table-td"><?php echo $user->name; ?></td>
                            <td id="table-td"><?php echo $user->email; ?></td>
                            <td id="table-td"><?php echo $user->profile == 1 ? 'Admin' : 'Vendedor'; ?></td>
                            <td id="table-td"><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'edit', $user->id]); ?>">Editar</a> <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'delete', $user->id]); ?>"> Excluir</a> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div id="no-results" style="display:none;">Pesquisa sem resultado.</div>
            
            <div class="paginator">
                <ul class="pagination">
                    <?php echo $this->Paginator->first('<< ' . __('Primeira')); ?>
                    <?php echo $this->Paginator->prev('< ' . __('Anterior')); ?>
                    <?php echo $this->Paginator->numbers(); ?>
                    <?php echo $this->Paginator->next(__('Próximo '.'>')); ?>
                    <?php echo $this->Paginator->last(__('Última '.'>>')); ?>    
                </ul>
                <p>
                    <?php echo $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) do total de {{count}}')) ?>
                </p>
            </div>
        </div>
    </div>
</div>