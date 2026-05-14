<?php

namespace OmieLib\Geral\Familias\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Familias\FamCadastro;
use OmieLib\Geral\Familias\FamChave;
use OmieLib\Geral\Familias\FamStatus;
use OmieLib\Geral\Familias\FamiliasCadastroJsonClient;
use OmieLib\Geral\Familias\Request\FamConsultarRequest;
use OmieLib\Geral\Familias\Request\FamListarRequest;

/**
 * Resposta do consulta de Familias de Produtos
 *
 * @pw_element integer $codigo Código da Familia de Produto
 * @pw_element string $codInt Código de Integração da Familia de Produto
 * @pw_element string $codFamilia Código da Familia
 * @pw_element string $nomeFamilia Nome da Familia de Produto
 * @pw_element string $inativo Indica se a Familia de Produto está inativa [S/N]
 * @pw_complex famConsultarResponse
 */
class FamConsultarResponse{
	/**
	 * Código da Familia de Produto
	 *
	 * @var integer
	 */
	public int $codigo;
	/**
	 * Código de Integração da Familia de Produto
	 *
	 * @var string
	 */
	public string $codInt;
	/**
	 * Código da Familia
	 *
	 * @var string
	 */
	public string $codFamilia;
	/**
	 * Nome da Familia de Produto
	 *
	 * @var string
	 */
	public string $nomeFamilia;
	/**
	 * Indica se a Familia de Produto está inativa [S/N]
	 *
	 * @var string
	 */
	public string $inativo;
}
