<?php
class Node
{
    public int $value;
    public ?Node $next;

    public function __construct(int $value, ?Node $next = null)
    {
        $this->value = $value;
        $this->next  = $next;
    }
}

//Посчитаем сумму элементов списка через рекурсию
function sumListRecursive(?Node $node): int {
    // Базовый случай: если массив пуст, сумма равна 0
    if (!$node->next) {
        return $node->value;
    }

    // Шаг рекурсии:
    // 1. Берем значение текущего элемента списка
    // 2. Рекурсивно вызываем функцию для оставшегося списка
    // 3. Складываем первый элемент с результатом рекурсивного вызова
    return $node->value + sumListRecursive($node->next);
}

// Пример использования:

// создание списка: 10 -> 20 -> 30 -> null
$node3 = new Node(30, null);
$node2 = new Node(20, $node3);
$head  = new Node(10, $node2);

$totalSum = sumListRecursive($head);
echo "Сумма элементов списка: " . $totalSum;