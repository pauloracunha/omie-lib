<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Informações adicionais da OS
 *
 * @pw_element string $cCodCateg Categoria
 * @pw_element integer $nCodCC Código da Conta Corrente
 * @pw_element string $cNumPedido Número do Pedido do Cliente
 * @pw_element string $cNumContrato Número do Contrato de Venda
 * @pw_element string $cContato Contato
 * @pw_element string $cDadosAdicNF Dados Adicionais da Nota Fiscal
 * @pw_element string $cCodObra Código da Obra
 * @pw_element string $cCodART Código ART
 * @pw_element integer $nCodProj Código do Projeto
 * @pw_element string $cCidPrestServ Cidade da Prestação do Serviço
 * @pw_element string $dDataRps Data da RPS
 * @pw_element string $cNumRecibo Número do Recibo gerado.<BR>(Gerado automaticamente. Se informado na inclusão será ignorado).
 * @pw_element string $cUsoConsumo Uso e consumo pessoal.
 * @pw_element integer $nIdDestinatario ID Cliente para o Destinatário.
 * @pw_element DetalhesNfse $DetalhesNfse Detalhes da NFSE.
 * @pw_complex InformacoesAdicionais
 */
class InformacoesAdicionais{
	/**
	 * Categoria
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Código da Conta Corrente
	 *
	 * @var integer
	 */
	public int $nCodCC;
	/**
	 * Número do Pedido do Cliente
	 *
	 * @var string
	 */
	public string $cNumPedido;
	/**
	 * Número do Contrato de Venda
	 *
	 * @var string
	 */
	public string $cNumContrato;
	/**
	 * Contato
	 *
	 * @var string
	 */
	public string $cContato;
	/**
	 * Dados Adicionais da Nota Fiscal
	 *
	 * @var string
	 */
	public string $cDadosAdicNF;
	/**
	 * Código da Obra
	 *
	 * @var string
	 */
	public string $cCodObra;
	/**
	 * Código ART
	 *
	 * @var string
	 */
	public string $cCodART;
	/**
	 * Código do Projeto
	 *
	 * @var integer
	 */
	public int $nCodProj;
	/**
	 * Cidade da Prestação do Serviço
	 *
	 * @var string
	 */
	public string $cCidPrestServ;
	/**
	 * Data da RPS
	 *
	 * @var string
	 */
	public string $dDataRps;
	/**
	 * Número do Recibo gerado.<BR>(Gerado automaticamente. Se informado na inclusão será ignorado).
	 *
	 * @var string
	 */
	public string $cNumRecibo;
	/**
	 * Uso e consumo pessoal.
	 *
	 * @var string
	 */
	public string $cUsoConsumo;
	/**
	 * ID Cliente para o Destinatário.
	 *
	 * @var integer
	 */
	public int $nIdDestinatario;
	/**
	 * Detalhes da NFSE.
	 *
	 * @var DetalhesNfse
	 */
	public DetalhesNfse $DetalhesNfse;
}
