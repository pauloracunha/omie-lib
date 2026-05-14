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
 * Dados específico para veículos novos
 *
 * @pw_element string $cTipoOpVeiculo Veículos - Tipo da Operação<BR><BR>Pode ser: <BR><BR>1 - Venda concessionária<BR>2 - Faturamento direto para consumidor final<BR>3 - Venda direta para grandes consumidores (frotista, governo, ...)<BR>0 - Outros
 * @pw_element string $cChassiVeiculo Veículos - Chassi do Veículo
 * @pw_element string $cCondVinVeiculo Veículos - Condição do VIN<BR><BR>Pode ser: <BR><BR>R - Remarcado<BR>N - Normal
 * @pw_element string $cModAnoFabrVeiculo Veículos - Ano Modelo de Fabricação
 * @pw_element string $cAnoFabrVeiculo Veículos - Ano de Fabricação
 * @pw_element string $cEspecieVeiculo Veículos - Espécie de Veículo<BR><BR>Pode ser: <BR><BR>1 - PASSAGEIRO<BR>2 - CARGA<BR>3 - MISTO<BR>4 - CORRIDA<BR>5 - TRAÇÃO<BR>6 - ESPECIAL
 * @pw_element string $cTipoVeiculo Veículos - Tipo de Veículo<BR><BR>Pode ser: <BR><BR>02 - CICLOMOTO<BR>03 - MOTONETA<BR>04 - MOTOCICLO<BR>05 - TRICICLO<BR>06 - AUTOMÓVEL<BR>07 - MICROÔNIBUS<BR>08 - ÔNIBUS<BR>10 - REBOQUE<BR>11 - SEMIRREBOQUE<BR>13 - CAMINHONETA<BR>14 - CAMINHÃO<BR>17 - C. TRATOR<BR>22 - ESP/ÔNIBUS<BR>23 - MISTO/CAM<BR>24 - CARGA/CAM
 * @pw_element potenciaMotor $potenciaMotor Dados específico para veículos novos - Potência, Combustível e Motor
 * @pw_element pinturaCor $pinturaCor Dados específico para veículos novos - Pintura e Cor
 * @pw_element outrasInfVeiculo $outrasInfVeiculo Dados específico para veículos novos - Outras informações
 * @pw_complex veiculos
 */
class Veiculos{
	/**
	 * Veículos - Tipo da Operação<BR><BR>Pode ser: <BR><BR>1 - Venda concessionária<BR>2 - Faturamento direto para consumidor final<BR>3 - Venda direta para grandes consumidores (frotista, governo, ...)<BR>0 - Outros
	 *
	 * @var string
	 */
	public string $cTipoOpVeiculo;
	/**
	 * Veículos - Chassi do Veículo
	 *
	 * @var string
	 */
	public string $cChassiVeiculo;
	/**
	 * Veículos - Condição do VIN<BR><BR>Pode ser: <BR><BR>R - Remarcado<BR>N - Normal
	 *
	 * @var string
	 */
	public string $cCondVinVeiculo;
	/**
	 * Veículos - Ano Modelo de Fabricação
	 *
	 * @var string
	 */
	public string $cModAnoFabrVeiculo;
	/**
	 * Veículos - Ano de Fabricação
	 *
	 * @var string
	 */
	public string $cAnoFabrVeiculo;
	/**
	 * Veículos - Espécie de Veículo<BR><BR>Pode ser: <BR><BR>1 - PASSAGEIRO<BR>2 - CARGA<BR>3 - MISTO<BR>4 - CORRIDA<BR>5 - TRAÇÃO<BR>6 - ESPECIAL
	 *
	 * @var string
	 */
	public string $cEspecieVeiculo;
	/**
	 * Veículos - Tipo de Veículo<BR><BR>Pode ser: <BR><BR>02 - CICLOMOTO<BR>03 - MOTONETA<BR>04 - MOTOCICLO<BR>05 - TRICICLO<BR>06 - AUTOMÓVEL<BR>07 - MICROÔNIBUS<BR>08 - ÔNIBUS<BR>10 - REBOQUE<BR>11 - SEMIRREBOQUE<BR>13 - CAMINHONETA<BR>14 - CAMINHÃO<BR>17 - C. TRATOR<BR>22 - ESP/ÔNIBUS<BR>23 - MISTO/CAM<BR>24 - CARGA/CAM
	 *
	 * @var string
	 */
	public string $cTipoVeiculo;
	/**
	 * Dados específico para veículos novos - Potência, Combustível e Motor
	 *
	 * @var PotenciaMotor
	 */
	public PotenciaMotor $potenciaMotor;
	/**
	 * Dados específico para veículos novos - Pintura e Cor
	 *
	 * @var PinturaCor
	 */
	public PinturaCor $pinturaCor;
	/**
	 * Dados específico para veículos novos - Outras informações
	 *
	 * @var OutrasInfVeiculo
	 */
	public OutrasInfVeiculo $outrasInfVeiculo;
}
