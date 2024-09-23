<h1>Liste de visites</h1>
<button type="button" class="btn btn-primary" onclick="tab_id_click()">Voir visites</button>
<div id="tab_id" class="display_none">



    <div class="container mt-3 max_table">
        <table class="table">
            <thead>
                <tr>
                    <th>Info</th>
                    <th>Info</th>
                    <th>Info</th>
                    <th>Info</th>
                    <th>Info</th>

                </tr>
            </thead>
            <tbody>

                <?php


                for ($w = 0; $w < count($timestamp_visit_user); $w++) {


                ?>


                    <tr>
                        <td><?php echo $ip2_visit_user[$w] ?></td>
                        <td><?php echo $ip4_visit_user[$w] ?></td>
                        <td><?php echo $ip5_visit_user[$w] ?></td>
                        <td><?php echo $ip8_visit_user[$w] ?></td>
                        <td><?php echo $timestamp_visit_user[$w] ?></td>









                    </tr>
                <?php

                }

                ?>


            </tbody>
        </table>
    </div>
</div>