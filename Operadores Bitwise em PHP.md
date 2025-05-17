**PHP tem suporte a operadores bitwise** (bit a bit)! Eles funcionam de forma muito parecida com outras linguagens como C, Java e Python.

---

###  **Operadores Bitwise em PHP**

| Operador | Nome                    | Descrição                                            |                                           |
| -------- | ----------------------- | ---------------------------------------------------- | ----------------------------------------- |
| `&`      | AND bit a bit           | Retorna 1 nos bits em que ambos os operandos forem 1 |                                           |
| \`       | \`                      | OR bit a bit                                         | Retorna 1 se pelo menos um dos bits for 1 |
| `^`      | XOR bit a bit           | Retorna 1 apenas se os bits forem diferentes         |                                           |
| `~`      | NOT bit a bit           | Inverte todos os bits                                |                                           |
| `<<`     | Deslocamento à esquerda | Desloca os bits para a esquerda (multiplica por 2ⁿ)  |                                           |
| `>>`     | Deslocamento à direita  | Desloca os bits para a direita (divide por 2ⁿ)       |                                           |

---

### **Exemplo prático em PHP:**

```php
<?php
$a = 5;  // binário: 0101
$b = 3;  // binário: 0011

echo "a & b = " . ($a & $b) . "\n";   // 1
echo "a | b = " . ($a | $b) . "\n";   // 7
echo "a ^ b = " . ($a ^ $b) . "\n";   // 6
echo "~a = " . (~$a) . "\n";          // -6 (em complemento de dois)
echo "a << 1 = " . ($a << 1) . "\n";  // 10
echo "a >> 1 = " . ($a >> 1) . "\n";  // 2
?>
```

---

### Observações:

* Em PHP, os operadores bitwise funcionam com **números inteiros (integers)**.
* O operador `~` (NOT) retorna o complemento de dois, o que pode resultar em números negativos.
* PHP trata internamente os números como **inteiros com sinal (signed integers)** de 32 ou 64 bits, dependendo do sistema.

---

Se quiser, posso te mostrar um exemplo mais prático, como manipular permissões usando bitwise em PHP, semelhante ao que é feito com `chmod` em sistemas Unix. Deseja isso?
