<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Ordenar Funcionários</title>
        <link rel="stylesheet" href="main.css">
    </head>
    
    <body>

        <header>
            <h1 class="tituloprincipal">Ordenar Funcionários</h1>
        </header>

        <div class="principal">
            <form action="main.php" target="resultado" method="post">
                
                <div class="selection">
                <p>Escolha o arquivo:</p>
                <select class="selection-list" name="arquivo">
                <option value ="null"></option>  
                <option class="index" value ="1000" disabled>1000</option>
                <option value ="crescente">Crescente</option>
                <option value ="decrescente">Decrescente</option>
                <option value ="aleatorio">Aleatório</option>
                <option class="index" value ="2000" disabled>2000</option>
                <option value ="crescente">Crescente</option>
                <option value ="decrescente">Decrescente</option>
                <option value ="aleatorio">Aleatório</option>
                <option class="index" value ="3000" disabled>3000</option>
                <option value ="crescente">Crescente</option>
                <option value ="decrescente">Decrescente</option>
                <option value ="aleatorio">Aleatório</option>
                <option class="index" value ="5000" disabled>5000</option>
                <option value ="crescente">Crescente</option>
                <option value ="decrescente">Decrescente</option>
                <option value ="aleatorio">Aleatório</option>
                </select> 
                </div>

                <div class="selection">
                <p>Escolha o método:</p>
                <select class= "selection-list" name="metodo">
                <option value ="null"></option>  
                <option value ="InsertionSort">Insertion Sort</option>
                <option value ="SelectionSort">Selection Sort</option>
                <option value ="MergeSort">Merge Sort</option>
                <option value ="QuickSort">Quick Sort</option>
                </select> 
                </div>

                <p class="selection"><input type="submit" value="Ordenar"></p>
                </form>

                <h3>Resultado:</h3>
                <iframe name="resultado"></iframe>
        </div>
    </body>
</html>