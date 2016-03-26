<?php

namespace CaioFRAlmeida\SoccerCompanyEventTest\Date;

use CaioFRAlmeida\SoccerCompanyEvent\Date\CalculadorData;

class CalculadorDataTest extends \PHPUnit_Framework_TestCase
{
    protected $calculador;

    public function setUp()
    {
        $this->calculador = new CalculadorData();
    }

    /**
     * @test
     * @expectedException CaioFRAlmeida\SoccerCompanyEvent\Exception\InvalidDateException
     */
    public function deveRetornarExcecaoSeDataInvalida()
    {
        $this->calculador->setDate('abc');
        $this->calculador->adicionarMinutos(10);
    }

    /**
     * @test
     */
    public function deveRetornarDataComMinutosAdicionados()
    {
        $esperado = new \DateTime('2016-03-26 15:05:00');
        $this->calculador->setDate('2016-03-26 15:00:00');

        $this->calculador->adicionarMinutos(5);

        $this->assertEquals($esperado, $this->calculador->getDate());
    }

    /**
     * @test
     */
    public function deveRetornarDataComHoraAdicionada()
    {
        $esperado = new \DateTime('2016-03-26 14:00:00');
        $this->calculador->setDate('2016-03-26 13:00:00');
        $this->calculador->adicionarHoras(1);

        $this->assertEquals($esperado, $this->calculador->getDate());
    }

    /**
     * @test
     */
    public function deveRetornarDataComHoraEMinutosAdicionados()
    {
        $esperado = new \DateTime('2016-03-26 16:30:00');
        $this->calculador->setDate('2016-03-26 15:00:00');

        $this->calculador->adicionarHoras(1);
        $this->calculador->adicionarMinutos(30);

        $this->assertEquals($esperado, $this->calculador->getDate());
    }
}

//test passando data invalida retorna exception
//test passando data adiciona hora
//test passando data adiciona minutos
//test passando data adiciona hora e minutos
