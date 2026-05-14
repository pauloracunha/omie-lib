<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Dados específico para veículos novos - Outras informações
 *
 * @pw_element string $cCodMarcaModVeiculo Veículos - Código Marca Modelo
 * @pw_element string $cSerialVeiculo Veículos - Serial (série)
 * @pw_element string $cMaxTracaoVeiculo Veículos - Capacidade Máxima de Tração
 * @pw_element string $cDisEixosVeiculo Veículos - Distância entre Eixos
 * @pw_element string $cCondVeiVeiculo Veículos - Condição do Veículo<BR><BR>Pode ser: <BR><BR>1 - Acabado<BR>2 - Inacabado<BR>3 - Semiacabado
 * @pw_element string $cMaxLotVeiculo Veículos - Capacidade máxima de lotação
 * @pw_element string $cRestVeiculo Veículos - Restrição<BR><BR>Pode ser: <BR><BR>0 - Não há<BR>1 - Alienação Fiduciária<BR>2 - Arrendamento Mercantil<BR>3 - Reserva de Domínio<BR>4 - Penhor de Veículos<BR>9 - Outras
 * @pw_element string $cPesoBrutoVeiculo Veículos - Peso Bruto (toneladas)
 * @pw_element string $cPesoLiqVeiculo Veículos - Peso Líquido (toneladas)
 * @pw_complex outrasInfVeiculo
 */
class OutrasInfVeiculo{
	/**
	 * Veículos - Código Marca Modelo
	 *
	 * @var string
	 */
	public string $cCodMarcaModVeiculo;
	/**
	 * Veículos - Serial (série)
	 *
	 * @var string
	 */
	public string $cSerialVeiculo;
	/**
	 * Veículos - Capacidade Máxima de Tração
	 *
	 * @var string
	 */
	public string $cMaxTracaoVeiculo;
	/**
	 * Veículos - Distância entre Eixos
	 *
	 * @var string
	 */
	public string $cDisEixosVeiculo;
	/**
	 * Veículos - Condição do Veículo<BR><BR>Pode ser: <BR><BR>1 - Acabado<BR>2 - Inacabado<BR>3 - Semiacabado
	 *
	 * @var string
	 */
	public string $cCondVeiVeiculo;
	/**
	 * Veículos - Capacidade máxima de lotação
	 *
	 * @var string
	 */
	public string $cMaxLotVeiculo;
	/**
	 * Veículos - Restrição<BR><BR>Pode ser: <BR><BR>0 - Não há<BR>1 - Alienação Fiduciária<BR>2 - Arrendamento Mercantil<BR>3 - Reserva de Domínio<BR>4 - Penhor de Veículos<BR>9 - Outras
	 *
	 * @var string
	 */
	public string $cRestVeiculo;
	/**
	 * Veículos - Peso Bruto (toneladas)
	 *
	 * @var string
	 */
	public string $cPesoBrutoVeiculo;
	/**
	 * Veículos - Peso Líquido (toneladas)
	 *
	 * @var string
	 */
	public string $cPesoLiqVeiculo;
}
