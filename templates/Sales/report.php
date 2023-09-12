<?php $this->assign('title', 'Lista de Frutas');  ?>


<div class="card white">
    <div class="card-content">
        <div class="col s12">
            <h3 class="center">Relatorio de vendas</h3>
            <a href="<?= $this->Url->build(['controller' => 'Sales', 'action' => 'index']) ?>" class="waves-effect indigo darken-4 waves-light btn"><i class="material-icons left">arrow_back</i>Voltar</a>
        </div>
        <input type="text" id="search" onkeyup="filterTable()" placeholder="Pesquisar...">
        <div id="total-records" class="total-records"></div>
            <table class="striped highlight centered responsive-table">
                <thead>
                    <tr>
                        <th id="table-th"><?php echo $this->Paginator->sort('user_id ', 'Fruta ↑↓'); ?></th>
                        <th id="table-th"><?php echo $this->Paginator->sort('fruta_id ', 'Vendedor ↑↓'); ?></th>
                        <th id="table-th"><?php echo $this->Paginator->sort('value_sold', 'Valor ↑↓'); ?></th>
                        <th id="table-th"><?php echo $this->Paginator->sort('created_at', 'Venda ↑↓'); ?></th>
                    </tr>
                </thead>

                <tbody id="table-body">
                    <?php foreach($sales as $sale): ?>
                        <tr>
                            <td id="table-td"><?php echo $sale->fruta->name; ?></td>
                            <td id="table-td"><?php echo $sale->user->name  ?></td>
                            <td id="table-td"><?php echo $sale->value_sold ?></td>
                            <td id="table-td"><?php echo $sale->created_at->format('H:i:s'); ?></td>
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