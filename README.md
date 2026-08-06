![phpstan-level](https://img.shields.io/badge/PHPStan-Level%209-brightgreen)

# Http Contract

A set of stable, framework‑independent contracts that define the core abstractions required to implement HTTP servers, middleware pipelines, and request/response handling in PHP.

These interfaces establish consistent patterns for HTTP processing, middleware chaining, URI parsing, file uploads, and response construction — following a lightweight, expressive, and practical approach focused on how HTTP is actually used in real applications. Rather than adopting the more formal PSR‑7/PSR‑15 model, this package intentionally chooses a simpler API that avoids streams and artificial immutability, reflecting the real‑world lifecycle of a request and offering a design closer to modern express‑style frameworks while prioritizing clarity and performance.

The goal of this package is to provide clear, explicit, and performance‑oriented contracts that can be adopted by any HTTP framework, micro‑framework, router, or modular application architecture.

## ✨ Features

- **Lightweight, expressive HTTP API**  
  A clean, practical interface inspired by modern express‑style frameworks, focused on how HTTP is actually used in real applications.

- **Straightforward middleware pipeline**  
  Middlewares receive Request, Response, and a Closure $next, enabling predictable, readable, and easy‑to‑compose processing flows.

- **Explicit final handler**  
  The pipeline defines a setFinalHandler() to control the end of the request lifecycle, making the execution flow clear and intentional.

- **Simple, real‑world Request and Response contracts**  
  No streams, no artificial immutability, no conceptual overhead — just the essential methods needed to read input and produce output.

- **Precise UploadedFile abstraction**  
  Strongly typed metadata (name, type, tmp_name, error, size) fully compatible with PHPStan Level 9 and aligned with the actual structure of $_FILES.

- **Clear and minimal URI interface**  
  Only the components that matter in real HTTP routing and dispatching: scheme, host, port, path, query, and fragment.

- **Framework‑agnostic design**  
  These contracts can be adopted by any router, micro‑framework, or HTTP server implementation without imposing architectural constraints.

---

## 📦 Installation

Install via Composer:

```bash
composer require stougeiro/http-contract
```

## 🔧 Implementations

Below is a list of known implementations maintained by the community.

- `stougeiro/http`  
  Repository: https://github.com/stougeiro/http

---

## 🧠 Why?

Because real‑world HTTP handling often benefits from a simpler, more expressive approach than the highly abstract, stream‑based model defined by PSR‑7 and PSR‑15. While these standards provide valuable guidance and a solid conceptual foundation, everyday request/response workflows rarely require that level of formalism.

This package takes those standards as a reference point but intentionally steps down a few layers of abstraction to prioritize clarity, ergonomics, and performance. By focusing on the practical lifecycle of a request — reading input, composing middleware, and producing a response — these contracts offer an express‑style API that aligns more closely with how developers actually work, without sacrificing the consistency and predictability expected from a shared interface.

---

## 🤝 Contributions

Contributions are welcome.
Feel free to open issues or submit pull requests.

<br><br>

[<img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" width="170"/>](https://www.buymeacoffee.com/stougeiro)