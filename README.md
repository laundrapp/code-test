# DNA Sequencer `Easy`

DNA is made up of 2 base pairs, AT and CG. This means that the corresponding pair for `A` is `T`,
and for `C` is `G`. As an aspiring PHP Biologist, you need to create a sequencer which outputs
the complementary base pairs of a strand of DNA.

```
Input -> Output
ATTGC -> TAACG
GTAT  -> CATA
```

## Function skeleton
```
function dna_sequencer(string $input): string
{

}
```

## Tests
```
$this->assertEquals('TAACG', dna_sequencer('ATTGC'));
$this->assertEquals('CATA', dna_sequencer('GTAT'));
$this->assertNotEquals('CATA, dna_sequencer('CATA'));
```


------


# String average `Easy`

Finding an average of an array of integers is simple. However, the array of 
numbers we have provided you are in string format. Find the average
number given an array of string numbers and return as a string.

```
Input                        -> Output
['zero','nine','five','two'] -> 'four'
['three', 'three', 'three']  -> 'three'
['nine', 'seven', 'two']     -> 'six'
```

## Function skeleton
```
function string_average(array $numbers): string
{

}
```

## Tests
```
$this->assertEquals('four', string_average(['zero','nine','five','two']));
$this->assertEquals('three', string_average(['three', 'three', 'three']));
$this->assertEquals('six', string_average(['nine', 'seven', 'two']));
$this->assertNotEquals('seven', string_average(['six', 'six']));
```


------


# Pyramid `Medium`

What's better than ASCII art? ASCII pyramids! Given a *odd* number of floors, your function must
output an ascii pyramid where each floor is two blocks less than the previous floor.

You must build the pyramid out of blocks (an asterisk *).

### Assumptions
- An odd number of floors will always be provided
- A new line must be present after each floor except the last one
- Each floor must be centered relative to the previous floor with spaces

```
Input
3

Output
  *
 ***
*****
```

```
Input
1

Output
*
```

```
Input
2

Output
 *
***
```

## Function skeleton
```
function pyramid(int $floors): string
{

}
```

## Tests
```
$this->assertEquals(
"  *  \n"
" *** \n"
"*****", pyramid(3));

$this->assertEquals("*", pyramid(1));

$this->assertEquals(
" * \n"
"***", pyramid(2));
```


------


# Stray number `Medium`

You are given an array of numbers. The array will always have 3 or more entries. 
Every number in the array is the same except for one. Find the stray number.

```
Input     -> Output
[1,1,1,3] -> 3
[2,3,2]   -> 3
[9,9,1]   -> 1
```

## Function skeleton
```
function stray_number(array $numbers): int
{

}
```

## Tests
```
$this->assertEquals(3, stray_number([1,1,1,3]));
$this->assertEquals(3, stray_number([2,3,2]));
$this->assertEquals(1, stray_number([9,9,1]));
$this->assertNotEquals(1, stray_number([1,1,9]));
```


------


# Braces `Hard`

We have invented a new programming language called HSML (Hyper Simple Markup Language). 
It only has 6 characters: `()[]{}`. It is obviously turing complete but we won't say how.
Write a syntax validator that ensures the braces are nested correctly. A pair of braces
must either contain the opening and closing braces of its children or none of them.

```
Input    -> Output
(        -> false
()       -> true
({})     -> true
({)}     -> false
([{}])   -> true
([]{})() -> true
()[[]{}  -> false
```

## Function skeleton
```
function syntax_validator(string $syntax): bool
{

}
```

## Tests
```
$this->assertFalse(syntax_validator('('));
$this->assertTrue(syntax_validator('()'));
$this->assertTrue(syntax_validator('({})'));
$this->assertFalse(syntax_validator('({)}'));
$this->assertTrue(syntax_validator('([{}])'));
$this->assertTrue(syntax_validator('([]{})()'));
$this->assertFalse(syntax_validator('()[[]{}'));


------


# Truth `Hell`

The ultimate truth is not 42. It is the value needed to pass this kata. Good luck!

```
Input     -> Output
*UNKNOWN* -> true
```

## Function
```
function truth($mixed): bool
{
    return $mixed === $mixed($mixed);
}
```

## Tests
```
$this->assertTrue(truth(*YOUR SOLUTION*));
```