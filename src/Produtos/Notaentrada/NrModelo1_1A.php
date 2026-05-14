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
 * Outras notas modelo 1/1A relacionadas
 *
 * @pw_element string $cAcaoItem Ação a ser realizada no item.<BR><BR>Pode ser:<BR><BR>"A" - Alterar o item.<BR>"E" - Excluir o item.<BR>"I" - Incluir o item.
 * @pw_element string $nrNumero Número da NF relacionada
 * @pw_element string $nrSerie Série da NF relacionada
 * @pw_element string $nrDtEmissao Data de emissão da NF relacionada
 * @pw_element string $nrCnpjCpf CNPJ/CPF do emitente da NF relacionada
 * @pw_element string $nrUF Unidade federativa do emitente da NF relacionada
 * @pw_complex nrModelo1_1A
 */
class NrModelo1_1A{
	/**
	 * Ação a ser realizada no item.<BR><BR>Pode ser:<BR><BR>"A" - Alterar o item.<BR>"E" - Excluir o item.<BR>"I" - Incluir o item.
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
	 * Unidade federativa do emitente da NF relacionada
	 *
	 * @var string
	 */
	public string $nrUF;
}
