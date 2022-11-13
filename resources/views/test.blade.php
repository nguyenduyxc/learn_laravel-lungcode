<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <h3>My name is <?=$name;?> (name php thuan)</h3>
    <h3>My name is {{ $name }} (name php kieu laravel)</h3>

    <hr>
    <h3>foreach arr</h3>
    <ul class="list-group">
        <?php
            foreach ($arr as $key => $value) {
                echo '
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    '.$value.'
                </li>
                ';
            }    
        ?>
    </ul>

    <hr>
    <h3>foreach arr with blade</h3>
    <ul class="list-group">
        @foreach ($arr as $value)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $value }}
            </li>
        @endforeach
    </ul>



    {{-- test component --}}
    <h3 class="text-center">Compotents</h3>
    {{-- <x-alert type="success"> </x-alert> {{-- c1 truyen bien   --}}
    <x-alert :type="'success'"/>  {{-- c2 truyen bien --}}

    <x-hehe />


    <hr>
    <div class="container">
      
      <div class="row ">
        <x-product name="Duy1" image="image"> </x-product>
        <x-product name="Duy2" image="image"> </x-product>
        <x-product name="Duy3" image="image"> </x-product>
        <x-product name="Duy4" image="image"> </x-product>
        <x-product name="Duy5" image="image"> </x-product>
        <x-product :name="'Duy6'" :image="'image2'" />
      </div>
    </div>

     {{--End  test component --}}
      
    
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>