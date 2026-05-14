<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * Informações Adicionais
 *
 * @pw_element string $cCodCateg Código da Categoria
 * @pw_element integer $nCodVend Código do Vendedor
 * @pw_element integer $nCodProj Código do Projeto
 * @pw_element integer $nCodCC Código da Conta Corrente
 * @pw_element string $cContato Nome do Contato
 * @pw_element string $cCidPrestServ Cidade da Prestação do Serviço e Estado
 * @pw_element string $cCodObra Código da Obra
 * @pw_element string $cCodART Código ART
 * @pw_element string $cNumEncap Código de Encapsulamento de notas dedutoras
 * @pw_element string $cDadosAdicNF Dados Adicionais para a Nota Fiscal
 * @pw_element string $cUsoConsumo Uso e consumo pessoal.<BR><BR> (0=Não, 1=Sim).
 * @pw_element integer $nIdDestinatario ID Cliente para o Destinatário.
 * @pw_complex infAdic
 */
class InfAdic{
	/**
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Código do Vendedor
	 *
	 * @var integer
	 */
	public int $nCodVend;
	/**
	 * Código do Projeto
	 *
	 * @var integer
	 */
	public int $nCodProj;
	/**
	 * Código da Conta Corrente
	 *
	 * @var integer
	 */
	public int $nCodCC;
	/**
	 * Nome do Contato
	 *
	 * @var string
	 */
	public string $cContato;
	/**
	 * Cidade da Prestação do Serviço e Estado
	 *
	 * @var string
	 */
	public string $cCidPrestServ;
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
	 * Código de Encapsulamento de notas dedutoras
	 *
	 * @var string
	 */
	public string $cNumEncap;
	/**
	 * Dados Adicionais para a Nota Fiscal
	 *
	 * @var string
	 */
	public string $cDadosAdicNF;
	/**
	 * Uso e consumo pessoal.<BR><BR> (0=Não, 1=Sim).
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
}
