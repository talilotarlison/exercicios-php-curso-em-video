 Existem os **operadores AND, OR, XOR, NOT**, e suas versões inversas (com **NAND** e **NOR**) que são fundamentais para operações bit a bit. Vou detalhar para você os operadores comuns e suas versões inversas.

### Operadores Bitwise com suas versões inversas:

1. **AND** (`&`) **vs** **NAND** (Not AND)
2. **OR** (`|`) **vs** **NOR** (Not OR)
3. **XOR** (`^`) **vs** **XNOR** (Not XOR)
4. **NOT** (`~`) **vs** — (não há uma versão diretamente oposta para o **NOT**, mas a inversão de um bit com `~` é suficiente)

---

###  **Tabelas de Verdade para Cada Operador**

#### **1. AND** e **NAND**

* **AND** (`&`): Retorna `1` apenas quando ambos os bits são `1`.
* **NAND**: A inversão de **AND**. Retorna `0` apenas quando ambos os bits são `1`, e `1` nos outros casos.

| A | B | A AND B | A NAND B |
| - | - | ------- | -------- |
| 0 | 0 | 0       | 1        |
| 0 | 1 | 0       | 1        |
| 1 | 0 | 0       | 1        |
| 1 | 1 | 1       | 0        |

---

#### **2. OR** e **NOR**

* **OR** (`|`): Retorna `1` se pelo menos um dos bits for `1`.
* **NOR**: A inversão de **OR**. Retorna `1` apenas quando ambos os bits são `0`.

| A | B | A OR B | A NOR B |
| - | - | ------ | ------- |
| 0 | 0 | 0      | 1       |
| 0 | 1 | 1      | 0       |
| 1 | 0 | 1      | 0       |
| 1 | 1 | 1      | 0       |

---

#### **3. XOR** e **XNOR**

* **XOR** (`^`): Retorna `1` quando os bits são diferentes. Se forem iguais, retorna `0`.
* **XNOR**: A inversão de **XOR**. Retorna `1` quando os bits são iguais e `0` quando são diferentes.

| A | B | A XOR B | A XNOR B |
| - | - | ------- | -------- |
| 0 | 0 | 0       | 1        |
| 0 | 1 | 1       | 0        |
| 1 | 0 | 1       | 0        |
| 1 | 1 | 0       | 1        |

---

#### **4. NOT** (Complemento de 1)

* **NOT** (`~`): Inverte todos os bits. Se o bit for `0`, ele se torna `1` e vice-versa. **Não existe uma versão "NOR" para o NOT**, já que ele é uma operação unária (aplica-se a um único número).
* O **NOT** bitwise em **PHP** funciona com **complemento de dois**, o que pode resultar em números negativos dependendo do valor de entrada.

| A | \~A |
| - | --- |
| 0 | 1   |
| 1 | -2  |

---

###  **Como Simular Esses Operadores em PHP**

Aqui está como você pode usar e simular os operadores bit a bit em PHP:

```php
<?php
$a = 5;  // binário: 0101
$b = 3;  // binário: 0011

// AND
$and_result = $a & $b;  
echo "a & b = " . $and_result . "\n";  // Resultado do AND

// NAND (simulando)
$nand_result = ~$and_result;  
echo "a NAND b = " . $nand_result . "\n";  // Resultado do NAND

// OR
$or_result = $a | $b;  
echo "a | b = " . $or_result . "\n";  // Resultado do OR

// NOR (simulando)
$nor_result = ~$or_result;  
echo "a NOR b = " . $nor_result . "\n";  // Resultado do NOR

// XOR
$xor_result = $a ^ $b;  
echo "a ^ b = " . $xor_result . "\n";  // Resultado do XOR

// XNOR (simulando)
$xnor_result = ~$xor_result;  
echo "a XNOR b = " . $xnor_result . "\n";  // Resultado do XNOR

// NOT
$not_result = ~$a;  
echo "~a = " . $not_result . "\n";  // Resultado do NOT
?>
```

###  **Resumo dos Operadores Bit a Bit em PHP:**

1. **AND (`&`)**: Retorna `1` quando ambos os bits são `1`.
2. **NAND**: Pode ser simulado com `~($a & $b)`.
3. **OR (`|`)**: Retorna `1` quando pelo menos um dos bits é `1`.
4. **NOR**: Pode ser simulado com `~($a | $b)`.
5. **XOR (`^`)**: Retorna `1` quando os bits são diferentes.
6. **XNOR**: Pode ser simulado com `~($a ^ $b)`.
7. **NOT (`~`)**: Inverte todos os bits.

---

Se você quiser ver mais detalhes sobre alguma dessas operações ou como elas podem ser usadas em aplicações práticas, como manipulação de permissões ou controle de flags, é só avisar! 😊



**Existe o operador **NAND** (Not AND)**, mas **não é nativamente suportado como um operador específico** em muitas linguagens de programação, incluindo PHP.

### O que é o **NAND**?

O **NAND** (Not AND) é a **inversão** da operação **AND**. Em termos simples:

* O **AND** bit a bit retorna **1** apenas quando ambos os bits são **1**.
* O **NAND** retorna **0** apenas quando ambos os bits são **1**. Em todos os outros casos, retorna **1**.

### Tabela de Verdade do **NAND**:

| A | B | A AND B | A NAND B |
| - | - | ------- | -------- |
| 0 | 0 | 0       | 1        |
| 0 | 1 | 0       | 1        |
| 1 | 0 | 0       | 1        |
| 1 | 1 | 1       | 0        |

Como você pode ver, o **NAND** é a **inversão** da operação **AND**. Ele **retorna 1 em todos os casos**, exceto quando ambos os bits são 1.

### Como Simular o **NAND** em PHP

Embora PHP não tenha um operador bitwise direto para **NAND**, você pode facilmente **simulá-lo** utilizando o operador **AND** e o operador **NOT (\~)**.

A fórmula seria:

```
A NAND B = NOT (A AND B)
```

Ou, em termos de PHP:

```php
$a = 5;  // 0101
$b = 3;  // 0011

$nand = ~($a & $b);  // Simulando o NAND

echo "A NAND B = " . $nand . "\n";
```

### Explicação:

1. **Primeiro**, fazemos a operação **AND** entre `a` e `b` com `$a & $b`.
2. **Depois**, usamos o operador `~` para **inverter** o resultado da operação `AND`.

### Exemplo completo em PHP:

```php
<?php
$a = 5;  // binário: 0101
$b = 3;  // binário: 0011

$and_result = $a & $b;  // AND bit a bit
$nand_result = ~$and_result;  // Inverte o resultado de AND (simulando NAND)

echo "a & b = " . $and_result . "\n";  // Exibe o resultado do AND
echo "a NAND b = " . $nand_result . "\n";  // Exibe o resultado do NAND
?>
```

### Saída esperada:

```
a & b = 1
a NAND b = -2
```

### Por que o resultado de **NAND** é **-2**?

* O valor **`1`** de `AND` é invertido para **`11111110`** no complemento de dois, resultando em **`-2`** (em números inteiros com sinal, como em PHP).

### Resumo:

* O **NAND** não é um operador diretamente disponível em PHP, mas você pode **simulá-lo** combinando **AND** e **NOT**.
* A operação **NAND** é a inversão da operação **AND**, e ela retorna **1** em todos os casos, exceto quando ambos os bits são **1**.

Se precisar de mais exemplos ou quiser explorar outro operador, me avise! 😉
