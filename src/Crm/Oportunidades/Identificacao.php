<?php

namespace OmieLib\Crm\Oportunidades;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Oportunidades\Request\OpAlterarRequest;
use OmieLib\Crm\Oportunidades\Request\OpConsultarRequest;
use OmieLib\Crm\Oportunidades\Request\OpExcluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpIncluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpListarRequest;
use OmieLib\Crm\Oportunidades\Request\OpUpsertRequest;
use OmieLib\Crm\Oportunidades\Response\OpAlterarResponse;
use OmieLib\Crm\Oportunidades\Response\OpConsultarResponse;
use OmieLib\Crm\Oportunidades\Response\OpExcluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpIncluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpListarResponse;
use OmieLib\Crm\Oportunidades\Response\OpUpsertResponse;

/**
 * Cabeçalho da Oportunidade
 *
 * @pw_element integer $nCodOp Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntOp Código de integração da oportunidade.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element string $cDesOp Descrição da oportunidade.
 * @pw_element integer $nCodContato Código do contato.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodSolucao Código da solução.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodOrigem Código da origem.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodConta Código da conta.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodVendedor Código do vendedor.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNumOp Número da oportunidade.
 * @pw_complex identificacao
 */
class Identificacao{
	/**
	 * Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodOp;
	/**
	 * Código de integração da oportunidade.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntOp;
	/**
	 * Descrição da oportunidade.
	 *
	 * @var string
	 */
	public string $cDesOp;
	/**
	 * Código do contato.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodContato;
	/**
	 * Código da solução.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodSolucao;
	/**
	 * Código da origem.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodOrigem;
	/**
	 * Código da conta.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodConta;
	/**
	 * Código do vendedor.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodVendedor;
	/**
	 * Número da oportunidade.
	 *
	 * @var string
	 */
	public string $cNumOp;
}
