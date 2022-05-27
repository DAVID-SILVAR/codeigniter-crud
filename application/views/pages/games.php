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
                                <td><?= $game['id'] ?></td>
                                <td><?= $game['name'] ?></td>
                                <td><?= $game['price'] ?></td>
                                <td><?= $game['developer'] ?></td>
                                <td><?= $game['release_date'] ?></td>
                                <td>
                                    <a href="<?= base_url("games/editar/")?><?=$game['id']?>" class="btn btn-warning"><i class = "fas fa-edit"></i></a>
                                    <a onclick=goDelete(<?=$game['id']?>) class="btn btn-danger"><i class = "fas fa-trash"></i></a>
                                    <!-- <input type="button" class="btn btn-danger" value="fas fa-edit" onclick=goDelete(<?=$game['id']?>)> href="Javascript:goDelete(<?=$game['id']?>)" -->
                                </td>
                            </tr>

                        <?php }?>

                    </tbody>
                </table>
            </div>

            <script>
                
                function goDelete(id){

                    var URL = "Games/deletar/" + id;
                
                    Swal.fire({
                    title: 'Deseja deletar este arquivo?',
                    text: "Você não podera reverter isso depois!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Deletar!'
                    }).then((result) => {
                    if (result.isConfirmed) {

                        Swal.fire(
                        'Deletado!',
                        'Arquivo deletado com sucesso!',
                        'success'
                        )
                        window.location.href = URL;
                    }
                    })

                }
            </script>



<!-- 
            <script>
             function goDelete(id){

                var URL = "Games/deletar/" + id;

                if(confirm("Deseja deletar este registro?")){
                    window.location.href = URL;
                }else{
                    alert("Registro mantido");
                    return false;

                }
            } 


            </script> -->