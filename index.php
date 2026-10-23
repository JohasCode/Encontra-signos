<?php include('layouts/header.php'); ?>

<body>
    <div class="container mt-5">
        <h1>
            Quer descobrir seu signo?
        </h1>

        <form id="signo-form" method="POST" action="show_zodiac_sign.php">
            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Digite sua data de nascimento</label> <br>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>
            
            <button type="submit" class="btn btn-primary">
                Descobrir
            </button>
        </form>
    </div>
</body>