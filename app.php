<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Yaş Hesaplama | Hasan Basri </title>
    <style>
        .container{
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 10px; 
            width: 60%;
            margin-top: 20%;
            margin-left: 50%;
            transform:  translate(-50%);
            box-shadow: 0 0 0.7em rgba(0,0,0,0.2);
        }
        input{
            width: 100%;
            border: 1px solid rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
        }
        input:focus{
            outline: 3px solid rgba(99, 184, 255, 0.5); 
        }
    </style>
  </head>
  <body>
    
  <?php 
  
  $gender = "female"; // cinsiyet (male/female)
  $weight = 73; // kilo (kg)
  $height = 188; // boy (cm)
  $age = 21; // yaş (sene)
  
  $guess = "1470"; // Tahmin edilen değer
  


        if( ($gender == 'male') or ($gender == 'female') ):

            if($gender == 'male'):
                $setBMRForMale      = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age); // burada BMR sonucumuzu hesaplıyoruz ve bunu tekrar düzenlenmesi için set adı altında değişene atıyoruz

                if($setBMRForMale > $guess):

                    $getBMR = "Tahmini değerden yüksek : " . $setBMRForMale; // burada çıkan sonucu front end e kullanılmak üzere bir değişkene atıyoruz 

                elseif($setBMRForMale == $guess):

                    $getBMR = "Tahmini değerden eşit : " . $setBMRForMale; // burada çıkan sonucu front end e kullanılmak üzere bir değişkene atıyoruz

                elseif($setBMRForMale < $guess):

                    $getBMR = "Tahmini değerden düşük : " . $setBMRForMale; // burada çıkan sonucu front end e kullanılmak üzere bir değişkene atıyoruz

                endif;

            endif;


            if($gender == 'female'):
                $setBMRForFemale    = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age); // burada BMR sonucumuzu hesaplıyoruz ve bunu tekrar düzenlenmesi için set adı altında değişene atıyoruz

                if($setBMRForFemale > $guess):
                    
                    $getBMR = "Tahmini değerden yüksek : " . $setBMRForFemale; // burada çıkan sonucu front end e kullanılmak üzere bir değişkene atıyoruz

                elseif($setBMRForFemale == $guess):

                    $getBMR = "Tahmini değerden eşit : " . $setBMRForFemale; // burada çıkan sonucu front end e kullanılmak üzere bir değişkene atıyoruz

                elseif($setBMRForFemale < $guess):

                    $getBMR = "Tahmini değerden düşük : " . $setBMRForFemale; // burada çıkan sonucu front end e kullanılmak üzere bir değişkene atıyoruz

                endif;

            endif;

            
            
            
        else:
            echo 'Lütfen Bir Cinsiyet Belirtiniz (en)';
        endif;



        
  
  ?>
        


    <div class="container text-center p-5">
        <div class="row text-success">
            <h5>Günlük BMR İhtiyacı Hesaplama</h5>
        </div>
        <div class="row mt-2">
            <h5>
                <?= $getBMR; ?>
            </h5>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
