<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
        <table class="table">
            <thead>
              <tr>

                <th scope="col">Datum</th>
                <th scope="col">Domácí</th>
                <th scope="col">Hosté</th>
                <th scope="col">Výsledek</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>23.6.2024</td>
                <td><div class="fi fi-cz"></div> SK Sigma Olomouc</td>
                <td><div class="fi fi-cz"></div> FC Kyjov 1917</td>
                <td>1:5</td>

              </tr>
              <tr>
                <td> 28.6.2024</td>
                <td><div class="fi fi-cz"></div> SK Sigma Olomouc</td>
                <td><div class="fi fi-sk"></div> AS Trenčín</td>
                <td>6:2</td>

              </tr>
              <tr>
                <td> 6.7.2024</td>
                <td><div class="fi fi-cz"></div> AS Pardubice</td>
                <td><div class="fi fi-cz"></div> Baník Ostrava</td>
                <td>3:1</td>

              </tr>
              <tr>
                <td>13.7.2024</td>
                <td><div class="fi fi-cz"></div> Dukla Praha</td>
                <td><div class="fi fi-cz"></div> SK Kladno</td>
                <td>4:2</td>

              </tr>
            </tbody>
          </table>
    </div>
<?= $this->endSection(); ?>