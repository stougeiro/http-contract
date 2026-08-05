![phpstan-level](https://img.shields.io/badge/PHPStan-Level%209-brightgreen)

# Container Contract

A set of stable, framework‑independent contracts that define the core abstractions required to implement dependency injection containers in PHP.

These interfaces establish consistent patterns for service registration, lifecycle management, resolution strategies, and factory‑based instantiation, allowing different container implementations to share a common foundation.

The goal of this package is to provide clear, explicit, and SOLID‑oriented contracts that can be adopted by any container, framework, or modular application architecture.

## ✨ Features

- **PSR‑11 compatible**  
  Fully aligned with `Psr\Container\ContainerInterface`, ensuring interoperability with existing tooling.

- **Explicit service registration**  
  Register services using clear, intention‑revealing methods: `set()`, `bind()`, and `singleton()` — no autowiring, no magic.

- **Factory‑based instantiation**  
  Classes may implement `ServiceFactoryInterface` to control their own creation logic, ensuring predictable and testable instantiation.

- **Provider lifecycle management**  
  ServiceProviderInterface defines `register()`, `boot()`, and `terminate()` phases, enabling modular initialization and teardown.

- **Framework‑agnostic design**  
  Contracts do not assume any specific container implementation, allowing different ecosystems to adopt and extend them freely.

---

## 📦 Installation

Install via Composer:

```bash
composer require stougeiro/container-contract
```


## 🔧 Implementations

These contracts are designed to be implemented by any dependency injection container or modular application architecture.
Below is a list of known implementations maintained by the community.

- `stougeiro/container`  
  Repository: https://github.com/stougeiro/container


---

## 🧠 Why?

Because dependency injection should be explicit, predictable, and framework‑independent.

Most containers rely on autowiring, reflection, or implicit resolution rules that make applications harder to reason about, harder to test, and harder to maintain over time.

These contracts take the opposite approach:
- No autowiring
- No reflection magic
- No hidden behavior

By defining clear, stable interfaces, we separate what a container or provider does from how it is implemented.
This allows different containers, modules, and applications to interoperate without being tightly coupled to a specific framework or resolution strategy.

---

## 🤝 Contributions

Contributions are welcome.
Feel free to open issues or submit pull requests.

<br><br>

[<img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" width="170"/>](https://www.buymeacoffee.com/stougeiro)