There are three main concerns of developing a PHP application:
- SQL Injection: An attacker can inject malicious SQL code through user inputs, leading to unhautorized access, data manipulation, or data deletion.
- Cross-Site Scripting (XSS): Injecting malicious scripts through user inputs can lead to data theft, session hijacks, or defacement of your website.
- Remote code execution: Unsafely handling user input could enable attackers to execute arbitrary code on your server, potentially compromising your entire system.

Also, some good practices for making a good input sanitization are:

- Never trust user input: Always assume that user input is unsafe and treat it as such. Sanitize and validate all data coming from users, even if it seems harmless.
- Use built-in PHP functions: PHP offers various built-in functions for input sanitization and validation. Make use of these functions insstead of writing your own.
- Validate data types and formats: Ensure that user input matches the expected data type and format. For example, if you expect an integer, validate the input as an integer and reject anything else.
- Use prepared statements: When interacting with databases, use prepared statements to prevent SQL injection attacks.
- Employ output escaping: When displaying user input on your website, use output escaping to prevent cross-site scripting (XSS) attacks.