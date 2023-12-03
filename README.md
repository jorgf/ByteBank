# ByteBank

## Sobre 
Esse projeto é resultado de um curso de Programação Orientada à Objetos (POO) da Alura. Durante todo o curso, foi desenvolvido um "sistema bancário" bem simples, apenas para praticar os os pilares de orientação à objeto: <strong>Abstração</strong>, <strong>Encapsulamento</strong>, <strong>Herança</strong> e <strong>Polimorfismo</strong>.
Muitos outros conceitos foram aprendidos durante este curso e colocado em prática.

## Tecnologias

- Esse projeto foi dedsenvolvido utilizando apenas o PHP versão 8.2

## Conceitos
### 1. Abstração

Parte da ideia de modelar um objeto do mundo real para o código, através de uma classe, utilizando atributos e métodos. Por exemplo, a classe 'Pessoa', do presente projeto, é uma abstração de uma pessoa real. Essa pessoa tem nome, cpf, profissão e outras características que, para nossa absração serão os atributos. Os métodos podem ser traduzidos como "o que essa pessoa pode fazer?", correr, falar, pular. No nosso exemplo, a pessoa pode informar o cpf (através do método recuperarCpf).
```
class Pessoa {
  protected string $nome;
  protected Cpf $cpf;
  protected Endereco $endereco;

  public function recuperarCpf():string {
    return $this->cpf->recuperarNumero();
  }
```
### 2. Herança
Uilizando a palavra-chave "extends", podemos fazer uma classe, chamada de superclasse ou classe mãe/pai, ofereca recursos (atributos e métodos) para uma outra classe, chamada de subclasse ou classe filha.
Neste projeto a classe ContaCorrente herda características da classe Conta
```
class ContaCorrente extends Conta {}
```

### 3. Polimorfismo
É a possibilidade de sobreescrever um método de forma diferente. Por exemplo a classe Funcionário tem um método chamado 'calculaBonificacao()', todas as classes que herdam essa classe, sobrescrevem utilizando um processo diferente para o calculo da bonificação, i.e., o mesmo método podendo ser implementado de formas diferentes.
```
abstract class Funcionario extends Pessoa{
  (...)
  public function calculaBonificacao():float {
    return $this->salario * 0.1;
  }
}

class Diretor extends Funcionario implements PodeAutenticar{
  
  public function calculaBonificacao():float {
    return $this->retornaSalario() * 2;
  }
  (...)
}
```
### 4. Encapsulamento
O encapsulamento é uma forma de impedir acesso aos atributos e métodos por meio dos modificadores de acesso, que são:
- public
- proteced
- private


