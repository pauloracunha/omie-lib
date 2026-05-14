<?php

namespace OmieLib\Servicos\Ibpt;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Ibpt\Request\IbptListarProdRequest;
use OmieLib\Servicos\Ibpt\Request\IbptListarServRequest;
use OmieLib\Servicos\Ibpt\Response\IbptListarProdResponse;
use OmieLib\Servicos\Ibpt\Response\IbptListarServResponse;

/**
 * Lista os produtos encontrados.
 *
 * @pw_element integer $nIdIBPT Id do IBPT.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $nIdNCM Id do NCM.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cDescricao Descrição do IBPT.
 * @pw_element string $dDtInicio Data de Início da vigência da Tabela do IBPT.
 * @pw_element string $dDtFinal Data final da vigência da Tabela do IBPT.
 * @pw_element decimal $nAliqMun Alíquota Municipal.
 * @pw_element decimal $nAliqEst Alíquota Estadual.
 * @pw_element decimal $nAliqFedNac Alíquota Federal - Nacional.
 * @pw_element decimal $nAliqFedImp Alíquota Federal - Importação.
 * @pw_element string $cFonte Fonte da Tabela do IBPT.
 * @pw_element string $cChave Chave da Tabela do IBPT.
 * @pw_element string $cVersao Versão da Tabela do IBPT.
 * @pw_complex produtos
 */
class Produtos{
	/**
	 * Id do IBPT.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdIBPT;
	/**
	 * Id do NCM.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $nIdNCM;
	/**
	 * Descrição do IBPT.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Data de Início da vigência da Tabela do IBPT.
	 *
	 * @var string
	 */
	public string $dDtInicio;
	/**
	 * Data final da vigência da Tabela do IBPT.
	 *
	 * @var string
	 */
	public string $dDtFinal;
	/**
	 * Alíquota Municipal.
	 *
	 * @var decimal
	 */
	public float $nAliqMun;
	/**
	 * Alíquota Estadual.
	 *
	 * @var decimal
	 */
	public float $nAliqEst;
	/**
	 * Alíquota Federal - Nacional.
	 *
	 * @var decimal
	 */
	public float $nAliqFedNac;
	/**
	 * Alíquota Federal - Importação.
	 *
	 * @var decimal
	 */
	public float $nAliqFedImp;
	/**
	 * Fonte da Tabela do IBPT.
	 *
	 * @var string
	 */
	public string $cFonte;
	/**
	 * Chave da Tabela do IBPT.
	 *
	 * @var string
	 */
	public string $cChave;
	/**
	 * Versão da Tabela do IBPT.
	 *
	 * @var string
	 */
	public string $cVersao;
}
