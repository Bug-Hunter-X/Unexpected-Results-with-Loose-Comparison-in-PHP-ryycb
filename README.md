# PHP Loose Comparison Bug

This repository demonstrates a common, yet easily overlooked, bug in PHP: the unexpected behavior of loose comparison (==) when comparing values of different types.

## The Bug
The provided `bug.php` file contains a function that attempts to compare two values for equality. Due to the use of loose comparison, the function produces an incorrect result when comparing the integer 0 and the string '0'.

## The Solution
The `bugSolution.php` file offers a corrected version, utilizing strict comparison (===) to avoid type-related issues.  Strict comparison ensures that both the value and the type are identical for a true comparison.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` and observe the incorrect output.
3. Run `bugSolution.php` and observe the corrected output.
