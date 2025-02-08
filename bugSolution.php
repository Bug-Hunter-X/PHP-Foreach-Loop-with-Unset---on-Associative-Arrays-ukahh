function foo(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'bar';
  });
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

$arr = [1 => 'foo', 2 => 'bar', 3 => 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => foo [3] => baz )

$arr = ['a' => 'foo', 'b' => 'bar', 'c' => 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [a] => foo [c] => baz )
