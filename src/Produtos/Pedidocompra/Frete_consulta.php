<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Frete, Transporte e Outras Despesas do Pedido de Compra
 *
 * @pw_element integer $nCodTransp Código interno da transportadora (este é o código da transportadora no Omie)
 * @pw_element string $cCodIntTransp Código de integração da transportadora (este é o código da transportadora no seu sistema)
 * @pw_element string $cTpFrete Modalidade do frete no pedido
 * @pw_element string $cPlaca Placa do veículo de transporte
 * @pw_element string $cUF UF da placa do veículo do transporte
 * @pw_element integer $nQtdVol Quantidade de volumes
 * @pw_element string $cEspVol Espécie dos volumes
 * @pw_element string $cMarVol Marca dos volumes
 * @pw_element string $cNumVol Numeração dos volumes
 * @pw_element decimal $nPesoLiq Peso líquido (Kg)
 * @pw_element decimal $nPesoBruto Peso bruto (Kg)
 * @pw_element decimal $nValFrete Valor do frete
 * @pw_element decimal $nValSeguro Valor do seguro
 * @pw_element string $cLacre Número do lacre
 * @pw_element decimal $nValOutras Valor das outras despesas acessórias
 * @pw_complex frete_consulta
 */
class Frete_consulta{
	/**
	 * Código interno da transportadora (este é o código da transportadora no Omie)
	 *
	 * @var integer
	 */
	public int $nCodTransp;
	/**
	 * Código de integração da transportadora (este é o código da transportadora no seu sistema)
	 *
	 * @var string
	 */
	public string $cCodIntTransp;
	/**
	 * Modalidade do frete no pedido
	 *
	 * @var string
	 */
	public string $cTpFrete;
	/**
	 * Placa do veículo de transporte
	 *
	 * @var string
	 */
	public string $cPlaca;
	/**
	 * UF da placa do veículo do transporte
	 *
	 * @var string
	 */
	public string $cUF;
	/**
	 * Quantidade de volumes
	 *
	 * @var integer
	 */
	public int $nQtdVol;
	/**
	 * Espécie dos volumes
	 *
	 * @var string
	 */
	public string $cEspVol;
	/**
	 * Marca dos volumes
	 *
	 * @var string
	 */
	public string $cMarVol;
	/**
	 * Numeração dos volumes
	 *
	 * @var string
	 */
	public string $cNumVol;
	/**
	 * Peso líquido (Kg)
	 *
	 * @var decimal
	 */
	public float $nPesoLiq;
	/**
	 * Peso bruto (Kg)
	 *
	 * @var decimal
	 */
	public float $nPesoBruto;
	/**
	 * Valor do frete
	 *
	 * @var decimal
	 */
	public float $nValFrete;
	/**
	 * Valor do seguro
	 *
	 * @var decimal
	 */
	public float $nValSeguro;
	/**
	 * Número do lacre
	 *
	 * @var string
	 */
	public string $cLacre;
	/**
	 * Valor das outras despesas acessórias
	 *
	 * @var decimal
	 */
	public float $nValOutras;
}
