<?php
// Lê o conteúdo do arquivo JSON e converte em array
$dados = json_decode(file_get_contents('admin/estoque.json'), true);
?>

<!-- Exibe os dados em uma tabela -->

<section class="py-5">
    <div class="container">
        <h1 style="text-align:center;margin-bottom:50px;">Promoção de verão🔥🔥🔥</h1>
        <?php foreach ($dados as $i => $estoque) : ?>
            <div class="row-cols-2 row-cols-md-3 row-cols-xl-4">
                <div style="float:left;" class="col mb-5">
                    <div style="border:none;" class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src=<?= $estoque['img'] ?> alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?= $estoque['nome'] ?></h5>
                                <h6 class="fw-bolder"><?= $estoque['marca'] ?></h6>
                                <!-- Product price-->
                                <?= "R$ " . $estoque['preco'] ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

</table>