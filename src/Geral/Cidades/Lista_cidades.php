<?php

namespace OmieLib\Geral\Cidades;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Cidades\Request\CidListarRequest;
use OmieLib\Geral\Cidades\Response\CidListarResponse;

/**
 * Cadastro de Cidades
 *
 * @pw_element string $cCod Código da Cidade
 * @pw_element string $cNome Nome da Cidade
 * @pw_element string $cUF UF da cidade
 * @pw_element string $nCodIBGE Código IBGE da Cidade
 * @pw_element integer $nCodSIAFI Código SIAFI da Cidade
 * @pw_complex lista_cidades
 */
class Lista_cidades{
	/**
	 * Código da Cidade
	 *
	 * @var string
	 */
	public string $cCod;
	/**
	 * Nome da Cidade
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * UF da cidade
	 *
	 * @var string
	 */
	public string $cUF;
	/**
	 * Código IBGE da Cidade
	 *
	 * @var string
	 */
	public string $nCodIBGE;
	/**
	 * Código SIAFI da Cidade
	 *
	 * @var integer
	 */
	public int $nCodSIAFI;
}
