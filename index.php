<?php


include_once('models/Student.php');

$students = Student::index();

if(isset($_POST['submit'])) {
  $response = Student::create([
    "name" => $_POST['name'],
    "nis" => $_POST['nis'],
  ]);

  echo $response;
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Class Ranks</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="">
    <!-- header -->
    <div class="bg-blue-500 p-3">
      <h1 class="text-xl text-white">Class Rank Tailwind</h1>
    </div>
    <!-- main -->
    <div class="flex bg-gray-100">
      <!-- sidebar -->
      <div class="basis-1/4 p-3">
        <div class="rounded-xl p-3 bg-slate-300">
          <h1 class="text-left mb-2 text-xl">Input NIS</h1>
          <form action="" method="POST">
            <div class="mb-2">
              <label for="nama">Nama</label>
              <input class="rounded-xl p-2 block w-full" type="text" name="name" id="name" placeholder="Masukan nama" />
            </div>
            <div class="mb-2">
              <label class="" for="nis">NIS</label>
              <input class="rounded-xl p-2 block w-full" type="number" name="nis" id="nis" placeholder="Masukan NIS" />
            </div>
            <div class="grid gap-2">
              <button class="bg-blue-500 hover:bg-blue-800 p-3 rounded-xl text-white" type="submit" name="submit">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- content -->
      <div class="basis-3/4 p-3">
        <div class="rounded-xl p-2 bg-slate-300">
          <h1 class="text-xl mb-3">Tabel Nilai Siswa</h1>
          <table class="w-full p-3">
            <thead>
              <tr class="bg-blue-600 text-white border border-gray-500">
                <th class="px-6 py-3">No.</th>
                <th class="text-left px-6 py-3">Nama</th>
                <th class="px-6 py-3">Nilai</th>
                <th class="px-6 py-3">Aksi</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php foreach ($students as $key => $student) : ?>
                <tr class="bg-white border border-gray-500">
                  <td><?= $key + 1 ?></td>
                  <td><?= $student['name'] ?></td>
                  <td><?= $student['nis'] ?></td>
                  <td>
                    <button href="detail.php" ? id=<?= $student['id']?>></button>
                    <button href="edit.php" class="bg-green-300 p-2 rounded-xl text-white hover:bg-green-500">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg>
                    </button>

                    <button href="delete.php" class="bg-red-300 p-2 rounded-xl text-white hover:bg-red-500">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                      </svg>
                    </button>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- footer -->
    <div class="bg-red-500 p-3 text-center">
      (c) copyright firman ramadhan 2023
    </div>
  </div>
</body>

</html>