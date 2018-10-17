##initial setup for a TYPO3 project using DDEV

##Version 1.2.x
Uses DDEV 1.2

##Version 1.3.x
Uses DDEV 1.3

*IMPORTANT* MariaDB 1.2.15 is not compatible with doctrine/dbal < 2.7 so TYPO3 vs 8.7 is not perfectly compatible, TYPO3 8.7 uses doctrine/dbal 2.5.x
TYPO3 9 is perfectly compatible
If you plan to use DDEV with TYPO3 8.7 please use DDEV 1.2

more here https://forge.typo3.org/issues/82023

and here https://github.com/doctrine/dbal/pull/2825