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

//Выведем максимум из элементов списка через рекурсию
function maxListRecursive(?Node $node): int {
    // Базовый случай: если массив пуст, сумма равна 0
    if (!$node->next) {
        return $node->value;
    }

    // Шаг рекурсии:
    // 1. Берем значение текущего элемента списка
    // 2. Рекурсивно вызываем функцию для оставшегося списка
    // 3. Сравниваем элемент с результатом рекурсивного вызова
    return max($node->value, maxListRecursive($node->next));
}

// Пример использования:

// создание списка: 10 -> 20 -> 30 -> null
$node3 = new Node(5, null);
$node2 = new Node(20, $node3);
$head  = new Node(10, $node2);

$max = maxListRecursive($head);
echo "Максимум: " . $max;