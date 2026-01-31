<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header text-center">
                    <img src="../img/waltermart-logo.png" style="width: 100px; height: 20px;" alt="">
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="fw-bold">Department</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select option</option>
                            <option value="1">WMS</option>
                            <option value="2">WDS</option>
                        </select>
                    </div>
                     <div class="mb-3">
                        <label for="" class="fw-bold">Asset Category</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select option</option>
                            <option value="1">POS</option>
                            <option value="2">WORKSTATION</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="fw-bold">Location</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select option</option>
                            <option value="1">CHECKOUT COUNTER AREA</option>
                            <option value="2">IT/SERVER ROOM</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-warning w-100">Filter</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">List of Items</h3>
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
                            <th scope="col">Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>WDS</td>
                                <td>WM Imus</td>
                                <td>POS</td>
                                <td>Checkout Counter Area</td>
                            </tr>
                            <tr>
                                <td>WMS</td>
                                <td>WM Imus</td>
                                <td>Workstation</td>
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