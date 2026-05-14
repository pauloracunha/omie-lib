<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Dados do Frete para Remessa
 *
 * @pw_element integer $nCodTransp Código da Transportadora
 * @pw_element string $cTpFrete Tipo de Frete<BR><BR>Pode ser:<BR><BR>0 - Contratação do Frete por conta do Remetente (CIF)<BR>1 - Contratação do Frete por conta do Destinatário (FOB)<BR>2 - Contratação do Frete por conta de Terceiros<BR>3 - Transporte Próprio por conta do Remetente<BR>4 - Transporte Próprio por conta do Destinatário<BR>9 - Sem Ocorrência de Transporte
 * @pw_element string $cPlaca Placa do Veículo
 * @pw_element string $cUF UF da Placa
 * @pw_element integer $nQtdVol Quantidade de Volumes
 * @pw_element string $cEspVol Espécie de Volume.<BR><BR>Campo livre, podendo ser o tipo de carga, como: caixa, fardo, palete, entre outros.
 * @pw_element string $cMarVol Marca dos Volumes
 * @pw_element string $cNumVol Numeração dos Volumes
 * @pw_element decimal $nPesoLiq Peso Liquído (Kg)
 * @pw_element decimal $nPesoBruto Peso Bruto (Kg)
 * @pw_element decimal $nValFrete Valor do Frete
 * @pw_element decimal $nValSeguro Valor do Seguro
 * @pw_element decimal $nValOutras Valor de Outras Despesas Acessórias
 * @pw_complex frete
 */
class Frete{
	/**
	 * Código da Transportadora
	 *
	 * @var integer
	 */
	public int $nCodTransp;
	/**
	 * Tipo de Frete<BR><BR>Pode ser:<BR><BR>0 - Contratação do Frete por conta do Remetente (CIF)<BR>1 - Contratação do Frete por conta do Destinatário (FOB)<BR>2 - Contratação do Frete por conta de Terceiros<BR>3 - Transporte Próprio por conta do Remetente<BR>4 - Transporte Próprio por conta do Destinatário<BR>9 - Sem Ocorrência de Transporte
	 *
	 * @var string
	 */
	public string $cTpFrete;
	/**
	 * Placa do Veículo
	 *
	 * @var string
	 */
	public string $cPlaca;
	/**
	 * UF da Placa
	 *
	 * @var string
	 */
	public string $cUF;
	/**
	 * Quantidade de Volumes
	 *
	 * @var integer
	 */
	public int $nQtdVol;
	/**
	 * Espécie de Volume.<BR><BR>Campo livre, podendo ser o tipo de carga, como: caixa, fardo, palete, entre outros.
	 *
	 * @var string
	 */
	public string $cEspVol;
	/**
	 * Marca dos Volumes
	 *
	 * @var string
	 */
	public string $cMarVol;
	/**
	 * Numeração dos Volumes
	 *
	 * @var string
	 */
	public string $cNumVol;
	/**
	 * Peso Liquído (Kg)
	 *
	 * @var decimal
	 */
	public float $nPesoLiq;
	/**
	 * Peso Bruto (Kg)
	 *
	 * @var decimal
	 */
	public float $nPesoBruto;
	/**
	 * Valor do Frete
	 *
	 * @var decimal
	 */
	public float $nValFrete;
	/**
	 * Valor do Seguro
	 *
	 * @var decimal
	 */
	public float $nValSeguro;
	/**
	 * Valor de Outras Despesas Acessórias
	 *
	 * @var decimal
	 */
	public float $nValOutras;
}
