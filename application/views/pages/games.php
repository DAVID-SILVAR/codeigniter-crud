<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="<?= base_url('Games/new')?>" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2 class="h2">Ultimos 5 jogos</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Desenvolvedor</th>
                            <th>data de lançamento</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        

                        <?php foreach($games as $game ){?>
                            <tr>
                                <th><?= $game['id'] ?></th>
                                <th><?= $game['name'] ?></th>
                                <th><?= $game['price'] ?></th>
                                <th><?= $game['developer'] ?></th>
                                <th><?= $game['release_date'] ?></th>
                                <th>EDUxx</th>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>

        </main>