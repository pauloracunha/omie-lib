<?php

namespace OmieLib\Produtos\Recebimentonfe;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;

/**
 * Transporte da NFe de recebimento
 *
 * @pw_element string $cTipoFrete Frete - Código do tipo
 * @pw_element integer $nIdTransportador Frete - Id do transportador
 * @pw_element integer $nQtdeVolume Frete/Volumes - Quantidade
 * @pw_element string $cEspecieVolume Frete/Volumes - Espécie
 * @pw_element string $cMarcaVolume Frete/Volumes - Marca
 * @pw_element string $cNumeroVolume Frete/Volumes - Numeração
 * @pw_element decimal $nPesoLiquido Frete/Volumes - Peso Líquido (Kg)
 * @pw_element decimal $nPesoBruto Frete/Volumes - Peso Bruto (Kg)
 * @pw_element string $cNumeroLacre Frete - Número do lacre
 * @pw_element string $cPlacaVeiculo Frete/Veículo - Placa
 * @pw_element string $cUFVeiculo Frete/Veículo - Unidade federativa
 * @pw_element string $cRNTRC Frete/Veículo - RNTRC (ANTT) - Registro Nacional de Transportador de Cargas
 * @pw_element string $cNomeTransp Nome da Transportadora
 * @pw_element string $cRazaoTransp Razao Social da Transportadora
 * @pw_element string $cCnpjCpfTransp CNPJ ou CPF da Transportadora
 * @pw_complex transporte
 */
class Transporte{
	/**
	 * Frete - Código do tipo
	 *
	 * @var string
	 */
	public string $cTipoFrete;
	/**
	 * Frete - Id do transportador
	 *
	 * @var integer
	 */
	public int $nIdTransportador;
	/**
	 * Frete/Volumes - Quantidade
	 *
	 * @var integer
	 */
	public int $nQtdeVolume;
	/**
	 * Frete/Volumes - Espécie
	 *
	 * @var string
	 */
	public string $cEspecieVolume;
	/**
	 * Frete/Volumes - Marca
	 *
	 * @var string
	 */
	public string $cMarcaVolume;
	/**
	 * Frete/Volumes - Numeração
	 *
	 * @var string
	 */
	public string $cNumeroVolume;
	/**
	 * Frete/Volumes - Peso Líquido (Kg)
	 *
	 * @var decimal
	 */
	public float $nPesoLiquido;
	/**
	 * Frete/Volumes - Peso Bruto (Kg)
	 *
	 * @var decimal
	 */
	public float $nPesoBruto;
	/**
	 * Frete - Número do lacre
	 *
	 * @var string
	 */
	public string $cNumeroLacre;
	/**
	 * Frete/Veículo - Placa
	 *
	 * @var string
	 */
	public string $cPlacaVeiculo;
	/**
	 * Frete/Veículo - Unidade federativa
	 *
	 * @var string
	 */
	public string $cUFVeiculo;
	/**
	 * Frete/Veículo - RNTRC (ANTT) - Registro Nacional de Transportador de Cargas
	 *
	 * @var string
	 */
	public string $cRNTRC;
	/**
	 * Nome da Transportadora
	 *
	 * @var string
	 */
	public string $cNomeTransp;
	/**
	 * Razao Social da Transportadora
	 *
	 * @var string
	 */
	public string $cRazaoTransp;
	/**
	 * CNPJ ou CPF da Transportadora
	 *
	 * @var string
	 */
	public string $cCnpjCpfTransp;
}
