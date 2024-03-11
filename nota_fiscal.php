<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Fiscal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Nota Fiscal</h2>
        <div id="invoiceDetails">
            <p><strong>Nome do Produto:</strong> <?php echo $_POST['productName']; ?></p>
            <p><strong>Quantidade:</strong> <?php echo $_POST['quantity']; ?></p>
            <p><strong>Modelo:</strong> <?php echo $_POST['model']; ?></p>
            <p><strong>Cor:</strong> <?php echo $_POST['color']; ?></p>
            <p><strong>Forma de Pagamento:</strong> <?php echo $_POST['paymentMethod']; ?></p>
            <?php if ($_POST['paymentMethod'] === 'credit' || $_POST['paymentMethod'] === 'debit'): ?>
                <p><strong>Número do Cartão:</strong> <?php echo $_POST['cardNumber']; ?></p>
            <?php endif; ?>
            <p><strong>Nome:</strong> <?php echo $_POST['name']; ?></p>
            <p><strong>CPF:</strong> <?php echo $_POST['cpf']; ?></p>
            <p><strong>E-mail:</strong> <?php echo $_POST['email']; ?></p>
            <p><strong>CEP:</strong> <?php echo $_POST['cep']; ?></p>
            <p><strong>Número:</strong> <?php echo $_POST['number']; ?></p>
        </div>
        <button onclick="window.print()">Imprimir Nota Fiscal</button>
    </div>
</body>
</html>
