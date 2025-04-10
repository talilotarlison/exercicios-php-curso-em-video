<?php
// Chave secreta e método de criptografia
$encryption_key = 'sua-chave-secreta-aqui';
$cipher_method = 'AES-256-CBC';

// Texto que será criptografado
$plaintext = "Texto para criptografar";

// Gera um vetor de inicialização (IV) aleatório
$iv_length = openssl_cipher_iv_length($cipher_method);
$iv = openssl_random_pseudo_bytes($iv_length);

// Criptografa o texto
$encrypted_text = openssl_encrypt($plaintext, $cipher_method, $encryption_key, 0, $iv);

// Codifica o IV e o texto criptografado em Base64 para armazenamento
$encrypted_data = base64_encode($iv . $encrypted_text);

echo "Texto Criptografado: " . $encrypted_data . "\n";

// Para descriptografar:
$data = base64_decode($encrypted_data);
$iv = substr($data, 0, $iv_length); // Extrai o IV
$encrypted_text = substr($data, $iv_length); // Extrai o texto criptografado

// Descriptografa o texto
$decrypted_text = openssl_decrypt($encrypted_text, $cipher_method, $encryption_key, 0, $iv);

echo "Texto Descriptografado: " . $decrypted_text . "\n";
?>
