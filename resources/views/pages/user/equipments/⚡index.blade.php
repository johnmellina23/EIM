<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">List of Hardware</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <button class="btn btn-warning">Import Data</button>
                    </div>
                    <table class="table">
                        <thead class="table-warning">
                            <tr>
                            <th scope="col">Department</th>
                            <th scope="col">Branch</th>
                            <th scope="col">Asset Category</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Model</th>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>WDS</td>
                                <td>WM Imus</td>
                                <td>POS</td>
                                <td>LENOVO</td>
                                <td>VERITON X4710G</td>
                                <td>DTVYGSP019328017873000</td>
                                <td>Checkout Counter Area</td>
                            </tr>
                            <tr>
                                <td>WMS</td>
                                <td>WM Imus</td>
                                <td>Workstation</td>
                                <td>LENOVO</td>
                                <td>VERITON X4710G</td>
                                <td>DTVYGSP019328017873000</td>
                                <td>IT/Server Room</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>