<?php
include 'connection.php';

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebe os dados enviados via POST
$data = json_decode(file_get_contents('php://input'), true);

// Verifica se os dados foram recebidos corretamente
if (isset($data['data']) && isset($data['hora'])) {
    $data_agendamento = $data['data'];
    $hora_agendamento = $data['hora'];

    // Defina o ID do cliente conforme necessário
    $id_cliente = 1; 

    // Status do serviço
    $status_servico = 1; 

    // Exemplo: apenas um ID de serviço
    // Você pode precisar ajustar isso para lidar com múltiplos serviços
    $id_servico = 1;

    // Combine data e hora corretamente
    $data_hora = date('Y-m-d H:i:s', strtotime("$data_agendamento $hora_agendamento"));

    // Prepara a instrução SQL
    $stmt = $conn->prepare("INSERT INTO agendamentos (data_hora, id_cliente, id_servico, status_servico) VALUES (:data_hora, :id_cliente, :id_servico, :status_servico)");

    // Vincula os parâmetros
    $stmt->bindParam(':data_hora', $data_hora);
    $stmt->bindParam(':id_cliente', $id_cliente);
    $stmt->bindParam(':id_servico', $id_servico);
    $stmt->bindParam(':status_servico', $status_servico);

    // Executa a instrução
    if ($stmt->execute()) {
        echo json_encode(array("message" => "Agendamento inserido com sucesso."));
    } else {
        echo json_encode(array("error" => "Erro ao inserir agendamento: " . $stmt->errorInfo()));
    }

    // Fecha a instrução e a conexão
    $stmt->closeCursor();
    $conn = null;
} else {
    echo json_encode(array("error" => "Nenhum dado recebido do JavaScript."));
}
?>
