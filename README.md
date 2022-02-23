### File Counter

#### Requirement

- PHP >=7.4 or PHP >=8.0
- Composer

#### Instalation

`composer install`

#### Usage

1. If necessary change target directory at `config/target.php`.
2. Run `composer start` to get result.

#### Example Result

```json
{
    "files": [
        "abcdef 4",
        "abcdefghijkl 1"
    ],
    "bigger": "abcdef 4"
}
```