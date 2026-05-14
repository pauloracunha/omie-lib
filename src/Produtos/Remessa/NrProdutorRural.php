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
 * Outras notas de produtor rural relacionadas
 *
 * @pw_element string $cAcaoItem Ação a ser realizada no item na alteração.<BR><BR>Pode ser:<BR><BR>"I" - Incluir o item.<BR>"E" - Excluir o item.
 * @pw_element string $nrNumero Número da NF relacionada
 * @pw_element string $nrSerie Série da NF relacionada
 * @pw_element string $nrDtEmissao Data de emissão da NF relacionada
 * @pw_element string $nrCnpjCpf CNPJ/CPF do emitente da NF relacionada
 * @pw_element string $nrIE Inscrição Estadual do emitente da NF relacionada
 * @pw_element string $nrUF Unidade federativa do emitente da NF relacionada
 * @pw_complex nrProdutorRural
 */
class NrProdutorRural{
	/**
	 * Ação a ser realizada no item na alteração.<BR><BR>Pode ser:<BR><BR>"I" - Incluir o item.<BR>"E" - Excluir o item.
	 *
	 * @var string
	 */
	public string $cAcaoItem;
	/**
	 * Número da NF relacionada
	 *
	 * @var string
	 */
	public string $nrNumero;
	/**
	 * Série da NF relacionada
	 *
	 * @var string
	 */
	public string $nrSerie;
	/**
	 * Data de emissão da NF relacionada
	 *
	 * @var string
	 */
	public string $nrDtEmissao;
	/**
	 * CNPJ/CPF do emitente da NF relacionada
	 *
	 * @var string
	 */
	public string $nrCnpjCpf;
	/**
	 * Inscrição Estadual do emitente da NF relacionada
	 *
	 * @var string
	 */
	public string $nrIE;
	/**
	 * Unidade federativa do emitente da NF relacionada
	 *
	 * @var string
	 */
	public string $nrUF;
}
