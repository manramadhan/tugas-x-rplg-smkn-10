<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE students.student_id = students.id";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>
        Daftar Ranking XI RPL
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary font-">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DAFTAR RANKING XI RPL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Input Data</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Daftar Ranking
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">men</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success btn-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5">
                <h3>INPUT DATA</h3>
                <form method="POST">
                    <div class="mt-4">
                        <div class="col-md-9 pb-3">
                            <label class="form-label" for="name">Nama</label>
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                        <div class="col-md-9">
                            <label class="form-label" for="nilai">Nilai</label>
                            <input id="nilai" name="nilai" type="number" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">KIRIM</button>

                </form>
            </div>
            <div class="col-md-8 mt-5">
                <h3>DAFTAR RANKING</h3>
                <table class="table table-bordered table-striped mt-5 text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $key => $d); ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $sd['name'] ?></td>
                            <td><?= $d['score'] ?></td>
                        </tr>
                        <?php endforeach ?>
                        <tr>
                            <th scope="row">1</td>
                            <td>Abdurrahman Faiz</td>
                            <td>88</td>
                        </tr>
                        <tr>
                            <th scope="row">2</td>
                            <td>Achmad Fauzan</td>
                            <td>83</td>
                        </tr>
                        <tr>
                            <th scope="row">3</td>
                            <td>Adystya Anandita</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <th scope="row">4</td>
                            <td>Aisyah Salsabila</td>
                            <td>78</td>
                        </tr>
                        <tr>
                            <th scope="row">5</td>
                            <td>Aldo Ahmad Hirzi</td>
                            <td>78</td>
                        </tr>
                        <tr>
                            <th scope="row">6</td>
                            <td>Ali Zainal Abidin</td>
                            <td>77</td>
                        </tr>
                        <tr>
                            <th scope="row">7</td>
                            <td>Allya Bunga Lestari</td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <th scope="row">8</td>
                            <td>Ananda David Saputra</td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <th scope="row">9</td>
                            <td>Anis Rahmawati</td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <th scope="row">10</td>
                            <td>Atifah Fadhila</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <th scope="row">11</td>
                            <td>Cakra Wibowo</td>
                            <td>73</td>
                        </tr>
                        <tr>
                            <th scope="row">12</td>
                            <td>Dana Sufianto/td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <th scope="row">13</td>
                            <td>Davin Aji Wibowo</td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <th scope="row">14</td>
                            <td>Esa Tegar Putra Utama</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <th scope="row">15</td>
                            <td>Fathimah</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <th scope="row">16</td>
                            <td>Firman Ramadhan</td>
                            <td>69</td>
                        </tr>
                        <tr>
                            <th scope="row">17</td>
                            <td>Handhika Tia Saputra</td>
                            <td>69</td>
                        </tr>
                        <tr>
                            <th scope="row">18</td>
                            <td>Kevin Adisurya Nugraha</td>
                            <td>67</td>
                        </tr>
                        <tr>
                            <th scope="row">19</td>
                            <td>Latifa</td>
                            <td>67</td>
                        </tr>
                        <tr>
                            <th scope="row">20</td>
                            <td>Moh. Fajar Ilham</td>
                            <td>67</td>
                        </tr>
                        <tr>
                            <th scope="row">21</td>
                            <td>Mohammad Ferdiansyah</td>
                            <td>67</td>
                        </tr>
                        <tr>
                            <th scope="row">22</td>
                            <td>Muhamad Wildan Ichsan</td>
                            <td>65</td>
                        </tr>
                        <tr>
                            <th scope="row">23</td>
                            <td>Muhammad Fadlan Kamil</td>
                            <td>65</td>
                        </tr>
                        <tr>
                            <th scope="row">24</td>
                            <td>Muhammad Faqi Nugroho</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <th scope="row">25</td>
                            <td>Muhammad Rizqi Ramadhan</td>
                            <td>63</td>
                        </tr>
                        <tr>
                            <th scope="row">26</td>
                            <td>Muhammad Satrio Wibisono</td>
                            <td>62</td>
                        </tr>
                        <tr>
                            <th scope="row">27</td>
                            <td>Putri Nabila</td>
                            <td>62</td>
                        </tr>
                        <tr>
                            <th scope="row">28</td>
                            <td>Putri Na'ilah Az-zahra</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <th scope="row">29</td>
                            <td>Rafif Dwi Prayata</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <th scope="row">30</td>
                            <td>Reynaldo Lamhot Silalahi</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <th scope="row">31</td>
                            <td>Ridwan Muhamad Husein</td>
                            <td>60</td>
                        </tr>
                        <tr>
                            <th scope="row">32</td>
                            <td>Salman Zulkarnain</td>
                            <td>60</td>
                        </tr>
                        <tr>
                            <th scope="row">33</td>
                            <td>Wisnu Sya'ban Triananda</td>
                            <td>65</td>
                        </tr>
                        <tr>
                            <th scope="row">34</td>
                            <td>Zahra Alilatul Bariza</td>
                            <td>67</td>
                        </tr>
                        <tr>
                            <th scope="row">35</td>
                            <td>Zaid Arrazy</td>
                            <td>66</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</div>
</div>


</html>